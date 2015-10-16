<?php
    session_start();

    function doLogout(){
        session_destroy();
        header("Location: login.php");
    }

    function say($thingToSay){
        echo($thingToSay."<br />");
    }


    /* Object definitions go below here */
    class Person {
        public $firstName;
        public $lastName;
        
        function __construct($fName, $lName){
            $this->firstName = $fName;
            $this->lastName  = $lName;
        }

        function speak($thingToSay){
            return $this->firstName." says, \"".$thingToSay."\".";
        }
    }

    class User extends Person{
        public $userid;
        public $password;
        public $numLogins = 0;

        function __construct($fName, $lName, $uid, $pswd){
            parent::__construct($fName, $lName);

            $this->userid    = $uid;
            $this->password  = $pswd;
        }

        function __toString(){
            return "User[name:".$this->firstName.
                   " ".$this->lastName.
                   " userid:".$this->userid."]";
        }

        public static function fromPerson($thePerson, $uid, $pswd){
            if(!($thePerson instanceof Person)){
                throw new Error("Attempted to create a User from a Person without supplying a Person.");
            }

            return new User($thePerson->firstName, $thePerson->lastName, $uid, $pswd);
        }

        function login($aPswd){
            if($aPswd === $this->password){
                return "Welcome back, ".$this->userid.". This is your ".++$this->numLogins." login.";
            }else{
                return "Sorry.  Your passwords don't match.";
            }
        }


    }

    function getPassword($anEmail){
        $mysql = new mysqli("localhost", "root", "root", "phpschema", 3306);
        if($mysql ->connect_errno){
            echo "Failed to connect to MySQL with error number: ".$mysql ->connect_errno;
            return "";
        }
        $results = $mysql->query("select pswd from users where email='".$anEmail."'");

        if($results->num_rows < 1){
            $results->free();
            return "";
        }else{
            $results -> data_seek(0);
            $aRow = $results->fetch_assoc();
            $returnValue = $aRow['pswd'];
            $results->free();
            return $returnValue;
        }
    }
?>



























