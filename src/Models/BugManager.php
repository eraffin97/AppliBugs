<?php
namespace BugApp\Models;
use BugApp\Models\Bug;
use BugApp\Models\Manager;

class BugManager extends Manager
{

    public function add(Bug $bug){

        $dbh = $this->connectDb();  

            $sql = "INSERT INTO bugs (title, description, url, ip) VALUES (:title, :description, :url, :ip)";
            $sth = $dbh->prepare($sql);
            $sth->execute([
                "title" => $bug->getTitle(),
                "description" => $bug->getDescription(),
                "url" => $bug->getUrl(),
                "ip" => $bug->getIp()
            ]);        

    }

    public function find($id)
    {

        $dbh = $this->connectDb();

        $sth = $dbh->prepare('SELECT * FROM bugs WHERE id = :id');
        $sth->bindParam(':id', $id, \PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(\PDO::FETCH_ASSOC);

        $bug = new Bug();
        $bug->setId($result["id"]);
        $bug->setTitle($result["title"]);
        $bug->setUrl($result["url"]);
        $bug->setIp($result["ip"]);
        $bug->setDescription($result["description"]);
        $bug->setCreatedAt($result["createdAt"]);
        $bug->setClosed($result["closed"]);
        
        return $bug;
    }


    public function findAll()
    {

        $dbh = $this->connectDb();

        $results = $dbh->query('SELECT * FROM `bugs` ORDER BY `id`', \PDO::FETCH_ASSOC);

        $bugs = [];

        // Parcours des résultats
        foreach ($results as $result) {
            $bug = new Bug();
            $bug->setId($result["id"]);
            $bug->setTitle($result["title"]);
            $bug->setDescription($result["description"]);
            $bug->setCreatedAt($result["createdAt"]);
            $bug->setClosed($result["closed"]);
            $bug->setUrl($result["url"]);
            $bug->setIp($result["ip"]);
            $bugs[] = $bug;
        }

        return $bugs;
    }


    public function load(){

        $handle = @fopen("result.txt", "r");
        if ($handle) {
            while (($buffer = fgets($handle, 4096)) !== false) {
                list($id, $description) = explode(";", $buffer);
                $bug = new Bug($id, $description, $url, $ip);
                $this->addBug($bug);
        }
        if (!feof($handle)) {
            echo "Erreur: fgets() a échoué\n";
        }
        fclose($handle);
        }

    }
    
    //methode PUT
    public function update($bug) {
        //var_dump($bug);
        $dbh = $this->connectDb();
        $sql = 'UPDATE `bugs` SET title=:title, description=:description, closed=:closed, url=:url, ip=:ip WHERE id=:id';
        $sth = $dbh->prepare($sql);
        $sth->execute(['title'=>$bug->getTitle(),
                       'description'=>$bug->getDescription(),
                       'closed'=>$bug->getClosed(),
                       'id'=>$bug->getId(),
                       'url'=>$bug->getUrl(),
                       'ip'=>$bug->getIp()]);
    }
    
    public function findByStatut($statut) {
        
        $dbh = $this->connectDb();
        
        if ($statut == 0) {

            $results = $dbh->query('SELECT * FROM `bugs` WHERE closed=0 ORDER BY `id`', \PDO::FETCH_ASSOC);

            $bugs = [];

            // Parcours des résultats
            foreach ($results as $result) {
                $bug = new Bug();
                $bug->setId($result["id"]);
                $bug->setTitle($result["title"]);
                $bug->setDescription($result["description"]);
                $bug->setCreatedAt($result["createdAt"]);
                $bug->setClosed($result["closed"]);
                $bug->setUrl($result["url"]);
                $bug->setIp($result["ip"]);
                $bugs[] = $bug;
            }

            return $bugs;
        }
    }

}
