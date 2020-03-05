<?php
require 'vendor/autoload.php';
use BugApp\Controller\BugController;

$url = '';

if(isset($_GET['url'])){
    $url = explode('/', $_GET['url']);
}

if($url[0] == 'bug') {

    if ($url[1] == 'liste') {
        return (new bugController())->liste();
    } if ($url[1] == 'show' and !empty($url[2])) {
        return (new bugController())->show($url[2]);
    } if ($url[1] == 'add') {
        return (new bugController())->add();
    } if ($url[1] == 'update' and !empty($url[2])) {
        return (new bugController())->update($url[2]);
    } 

}
