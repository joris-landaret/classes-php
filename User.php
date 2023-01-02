<?php

// Connexion à la base de donné

$mysqli = new mysqli("localhost","root","","classes",3307);

if ($mysqli) {
    echo "connexion établie <br />";
  }
  else { 
    die(mysqli_connect_error());
  }

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

    public function register($login, $password, $email, $firstname, $lastname){
        return $this->login;
    }

    public function connect($login, $password){
        return $this->login;
    }

    public function disconnect(){
        return $this->login;
    }

    public function delete(){
        return $this->login;
    }

    public function update($login, $password, $email, $firstname, $lastname){
        return $this->login;
    }

    public function isConnected(){
        return $this->login;
    }

    public function getAllinfos(){
        return $this->login;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getEmail(){
        return $this->login;
    }

    public function getFirstname(){
        return $this->login;
    }

    public function getLastname(){
        return $this->login;
    }
}

?>