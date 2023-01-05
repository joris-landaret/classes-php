<?php

// Création classe USER

//use User as GlobalUser;

class User {

    // Attributs

    private $id;
    public $login;
    private $password;
    public $email;
    public $firstname;
    public $lastname;
    private $mysqli;
    private $request_fetch_all;
    //public $request = $mysqli->query($sql);
    //private $mysqli = new mysqli("localhost","root","","classes",3307);

    // Construct

    public function __construct()
    {
        // Connexion à la base de donné
        //var_dump($this);
        try {
            $this->mysqli = new PDO("mysql:host=localhost;dbname=classes;charset=utf8;port=3307","root","",);
            $this->mysqli->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        

        if ($this->mysqli) {
            echo "connexion établie <br />";
        }
        else { 
            die(mysqli_connect_error());
        }

        
        $request = $this->mysqli -> prepare("SELECT * FROM utilisateurs");
        $request->execute(array());

        $this->request_fetch_all = $request -> fetchAll();

        var_dump($this->request_fetch_all);

    }

    //Mehtodes CRUD (Create / Read / Update / Delete)

    public function register($login, $password, $email, $firstname, $lastname){
        
        $this->login=$login;
        $this->password=$password;
        $this->email=$email;
        $this->firstname=$firstname;
        $this->lastname=$lastname;

        $log_ok = false;

        foreach($this->request_fetch_all as $user){
            if($login == $user [1]){
                $log_ok = false;
                //break;
            }
            else{$log_ok = true;}
        }
        
        if($log_ok == true){

            $sql = "INSERT INTO `utilisateurs` (`login`,`password`,`email`,`firstname`,`lastname`) 
            VALUE (?,?,?,?,?)";
            $request2 = $this->mysqli -> prepare($sql);
            $request2->execute(array($login, $password, $email, $firstname, $lastname));
        }
        else'<p>Le nom du login est déja utilisé</p>';
        
        return "
        <table border = 1 >
            <tr>
                <th>Login</th>
                <th>Password</th>
                <th>Email</th>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
            <tr>
                <td>$login</td>
                <td>$password</td>
                <td>$email</td>
                <td>$firstname</td>
                <td>$lastname</td>
            </tr>
        </table>";
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

// Création d'objets
$col = new User();

//initiliaser les attribut de l'objet
echo $col->register('col', 'col', 'col@col.com', 'firstcol', 'lastcol');


?>