<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('Models/bugManager.php');

class bugController {

    public function liste() {
        $manager = new BugManager();
        $bugs = $manager->findAll();
        $list_view = $this->render('Views/list', ['bugs' => $bugs]);
        return $this->send($list_view, 200);
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

    public function show($id){
        $manager = new BugManager();
        $bug = $manager->find($id);
        $view_to_show = $this->render('Views/show', ['bug' => $bug]);
        return $this->send($view_to_show, 200);
    }

    public function add()
    {
        if (isset($_POST["Enregistrer"])) {
            $manager = new BugManager();
            $bug = new Bug();
            $bug->setTitle($_POST['intitule']);
            $bug->setDescription($_POST['description']);
            $manager->add($bug);
            header('Location: liste');
        } else {
            $view_to_show = $this->render('Views/add', []);
            return $this->send($view_to_show, 200);
        }
    }
    
    public function update(){
        
    }
    
}



