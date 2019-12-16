<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Manager {
    

    
    function connectDB() {
        include 'params.php';
        try {

        $pdo_options[\PDO::ATTR_ERRMODE] = \PDO::ERRMODE_EXCEPTION;

            $dbh = new \PDO("mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8", $DB_LOGIN, $DB_PASSWORD, $pdo_options);
        } catch (Exception $e) {

            die('Erreur : ' . $e->getMessage());
        }

        return $dbh;
    }
}