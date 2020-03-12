<?php

namespace BugApp\Controller;
use BugApp\Models\Bug;
use BugApp\Models\BugManager;
use GuzzleHttp\Client;

class bugController {

    public function liste() {

        $manager = new BugManager();

        $headers = apache_request_headers();
        if (in_array("XMLHttpRequest", $headers)) {
            if (isset($GET['checkbox'])) {
                $bugs = $manager->findByStatut(0);
            } else {
                $bugs = $manager->findAll();
            }
            $list_view = $this->render('src/Views/list', ['bugs' => $bugs]);
            return $this->send($list_view, 200);
            
        } else {
            $bugs = $manager->findAll();
            $list_view = $this->render('src/Views/list', ['bugs' => $bugs]);
            return $this->send($list_view, 200);
        }
    }

    public function render($view_to_show, $parameters) {
        $view_to_show = $view_to_show . '.php';
        ob_start();
        $parameters;
        require($view_to_show);
        return ob_get_clean();
    }

    public function send($view_concerned, $code) {
        http_response_code($code);
        header('Content-Type: Text/html');
        echo $view_concerned;
    }

    public function show($id) {
        $manager = new BugManager();
        $bug = $manager->find($id);
        $view_to_show = $this->render('src/Views/show', ['bug' => $bug]);
        return $this->send($view_to_show, 200);
    }

    public function add() {
        if (isset($_POST["Enregistrer"])) {
            $manager = new BugManager();
            $bug = new Bug();
            $bug->setTitle($_POST['intitule']);
            $bug->setDescription($_POST['description']);
            $bug->setUrl($_POST['url']);
            $ndd = parse_url($_POST['url'])['host'];
            $client = new Client();
            $response = $client->request('GET', 'http://ip-api.com/json/'.$ndd);
            $bug->setIp((json_decode($response->getBody()))->query);
            $manager->add($bug);
            header('Location: liste');
          
            
        } else {
            $view_to_show = $this->render('src/Views/add', []);
            return $this->send($view_to_show, 200);
        }
    }

    public function update($id) {
        $manager = new BugManager();
        $bug = $manager->find($id);
        if (isset($_POST['closed'])) {
            $bug->setClosed($_POST['closed']);
        }
        $manager->update($bug);
        http_response_code(200);
        header('Content-type:application/json');
        $response = ['success' => true,
            'id' => $bug->getId()
        ];
        echo json_encode($response);
    }

}
