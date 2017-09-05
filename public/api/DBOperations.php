
<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 19/08/17
 * Time: 11:23 AM
 */

class DBOperations{


    private $host = 'localhost';
    private $user = 'grupohyd_iesu';
    private $db = 'grupohyd_ies';
    private $pass = '$4XB7((n]R0C';
    private $conn;


    public function __construct() {

        $this -> conn = new PDO("mysql:host=".$this -> host.";dbname=".$this -> db, $this -> user, $this -> pass);

        $this -> conn -> query("SET NAMES 'utf8'");

    }


    public function check_user($email)
    {

                        
        $sql = 'SELECT COUNT(*) from users WHERE email =:email';
        $query = $this -> conn -> prepare($sql);
        $query ->execute(array(':email' => $email));
        if ($query){
            $row = $query ->fetchColumn();
            if ($row == 0){
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }

    }

    public function check_id($doc_id)
    {

                        
        $sql = 'SELECT COUNT(*) from users WHERE doc_id =:doc_id';
        $query = $this -> conn -> prepare($sql);
        $query ->execute(array(':doc_id' => $doc_id));
        if ($query){
            $row = $query ->fetchColumn();
            if ($row == 0){

                return false;

            }else{

                return true;

            }
        }else{

            return false;

        }

    }

    public function insertUser($name,$apellidos,$doc_id,$tipo_id,$cod_ocupacion,$universidad,$programa,$semestre,$telefono,$email,$estado_cuenta,$fecha_creacion,$pago_monto,$url_qr,$fecha_lim_pago,$password_llega,$qr_code,$admin,$ciudad)

    {


    //$hash = $this->getHash($password_llega);
    //$password = $hash["encrypted"];
    //$salt = $hash["salt"];
    $password = crypt($password_llega);
    $salt = "sadasf";


        $sql = 'INSERT INTO users SET name =:name , password =:password 
        , apellidos =:apellidos 
        , doc_id =:doc_id 
        , tipo_id =:tipo_id 
        , cod_ocupacion =:cod_ocupacion 
        , universidad =:universidad 
        , programa =:programa 
        , semestre =:semestre 
        , telefono =:telefono 
        , email =:email 
        , estado_cuenta =:estado_cuenta 
        , fecha_creacion =:fecha_creacion 
        , pago_monto =:pago_monto 
        , url_qr =:url_qr 
        , fecha_lim_pago =:fecha_lim_pago 
        , qr_code =:qr_code 
        , admin =:admin 
        , ciudad =:ciudad 

        '
         ;

        $query = $this -> conn -> prepare($sql);
        $query -> execute (array(
            ':name' => $name
            , ':password' => $password
            ,':apellidos' => $apellidos
            ,':doc_id' => $doc_id
            ,':tipo_id' => $tipo_id
            ,':cod_ocupacion' => $cod_ocupacion
            ,':universidad' => $universidad
            ,':programa' => $programa
            ,':semestre' => $semestre
            ,':telefono' => $telefono
            ,':email' => $email
            ,':estado_cuenta' => $estado_cuenta
            ,':fecha_creacion' => $fecha_creacion
            ,':pago_monto' => $pago_monto
            ,':url_qr' => $url_qr
            ,':fecha_lim_pago' => $fecha_lim_pago
            ,':qr_code' => $qr_code
            ,':admin' => $admin
            ,':ciudad' => $ciudad
            ));

        if ($query) {
            # code...
            return true;
        }else{
            return false;
        }
    }




 public function changePassword($email, $password_llega){


    
    $password = crypt($password_llega);
    $salt = "sadasf";

    $sql = 'UPDATE users SET password = :password WHERE email = :email';
    $query = $this -> conn -> prepare($sql);
    $query -> execute(array(':email' => $email, ':password' => $password));

    if ($query) {
        
        return true;

    } else {

        return false;

    }

 }



 public function checkLogin($email, $password) {

    $sql = 'SELECT * FROM users WHERE email =:email';
    $query = $this -> conn -> prepare($sql);
    $query -> execute(array(':email' => $email));
    $data = $query -> fetchObject();
    $salt = $data -> salt;
    $db_encrypted_password = $data -> password;

    //if ($this -> verifyHash($password.$salt,$db_encrypted_password) ) {
    //(hash_equals($hashed_password, crypt($user_input, $hashed_password)
    if(hash_equals($db_encrypted_password , crypt($password,$db_encrypted_password))){


        $user["nombres"] = $data -> name;
        $user["apellidos"] = $data -> apellidos;
        $user["doc_id"] = $data -> doc_id;
        $user["tipo_id"] = $data -> tipo_id;
        $user["cod_ocupacion"] = $data -> cod_ocupacion;
        $user["universidad"] = $data -> universidad;
        $user["programa"] = $data -> programa;
        $user["semestre"] = $data -> semestre;
        $user["telefono"] = $data -> telefono;
        $user["email"] = $data -> email;
        $user["estado_cuenta"] = $data -> estado_cuenta;
        $user["fecha_creacion"] = $data -> fecha_creacion;
        $user["pago_monto"] = $data -> pago_monto;
        $user["url_qr"] = $data -> url_qr;
        $user["fecha_lim_pago"] = $data -> fecha_lim_pago;
        $user["remember_token"] = $data -> remember_token;
        $user["admin"] = $data -> admin;
        $user["qr_code"] = $data -> qr_code;
        $user["ciudad"] = $data -> ciudad;
        return $user;

    } else {

        return false;
    }

 }






 public function getHash($password) {

     $salt = sha1(rand());
     $salt = substr($salt, 0, 10);
     $encrypted = password_hash($password.$salt, PASSWORD_DEFAULT);
     $hash = array("salt" => $salt, "encrypted" => $encrypted);

     return $hash;

}



public function verifyHash($password, $hash) {

    return password_verify ($password, $hash);
}

}