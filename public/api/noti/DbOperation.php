<?php

class DbOperation
{
    //Database connection link
    private $con;

    //Class constructor
    function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/DbConnect.php';

        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();

        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
    }

    //storing token in database 
    public function registerDevice($email,$token,$device){
        if(!$this->isEmailExist($email)){
            $stmt = $this->con->prepare("INSERT INTO devices (email, token, device) VALUES (?,?,?) ");
            $stmt->bind_param("sss",$email,$token,$device);
            if($stmt->execute()){
            	return 0;
            }               
            return 1; //return 1 means failure
        }else{
            //return 2; //returning 2 means email already exist
            
            $stmt = $this->con->prepare("UPDATE devices SET token='$token' WHERE email='$email' ");
            //$stmt->bind_param("sss",$email,$token,$device);
            if($stmt->execute()){
            	return 2;
            }               
            return 1; //return 1 means failure
           
          
        }
    }

    //the method will check if email already exist 
    private function isEmailexist($email){
        $stmt = $this->con->prepare("SELECT id FROM devices WHERE email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->store_result();
        $num_rows = $stmt->num_rows;
        $stmt->close();
        return $num_rows > 0;
    }

    //getting all tokens to send push to all devices
    public function getAllTokens(){
       /* $stmt = $this->con->prepare("SELECT token FROM devices");
        $stmt->execute(); 
        $result = $stmt->get_result();
        $tokens = array(); 
        while($token = $result->fetch_assoc()){
            array_push($tokens, $token['token']);
        }
        return $tokens; */

        $result = $this->con->query("SELECT token FROM devices");
        $tokens = array();
        while($token = $result->fetch_assoc()){
        array_push($tokens, $token['token']);
    	}
    
    	return $tokens;

}
    //getting a specified token to send push to selected device
    public function getTokenByEmail($email){
        /*
        $stmt = $this->con->prepare("SELECT token FROM devices WHERE email = ?");
        $stmt->bind_param("s",$email);
        $stmt->execute(); 
        $result = $stmt->get_result()->fetch_assoc();
        return array($result['token']); */

 	$result = $this->con->query("SELECT token FROM devices WHERE email = '$email'");
        $tokens = array();
        while($token = $result->fetch_assoc()){
            array_push($tokens, $token['token']);
        }

        return $tokens;

        
    
	
    }

    //getting all the registered devices from database 
    public function getAllDevices(){
        /*
        $stmt = $this->con->prepare("SELECT * FROM devices");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result; */
        $stmt = $this->con->query("SELECT * FROM devices");
        return $stmt;
    }
}