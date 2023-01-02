<?php

// Création classe USER
class User {

    // Attributs

    private $id;
    public $login;
    private $password;
    public $email;
    public $firstname;
    public $lastname;

    // Construct

    public function __construct()
    {
        echo "ok";
    }

    //Mehtodes CRUD (Create / Read / Update / Delete)

    public function $register($login, $password, $email, $firstname, $lastname){
        echo "ok";
    }

    public function $connect($login; $password){
        echo "ok";
    }

    public function $disconnect(){
        echo "ok";
    }

    public function $delete(){
        echo "ok";
    }

    public function $update($login, $password, $email, $firstname, $lastname){
        echo "ok";
    }

    public function $isConnected(){
        echo "ok";
    }

    public function $getAllinfos(){
        echo "ok";
    }
    public function $getLogin(){
        echo "ok";
    }
    public function $getEmail(){
        echo "ok";
    }
    public function $getFirstname(){
        echo "ok";
    }
    public function $getLastname(){
        echo "ok";
    }
}

?>