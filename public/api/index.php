<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 19/08/17
 * Time: 11:23 AM
 */
//phpinfo();

require_once 'Functions.php';

$fun = new Functions();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $data = json_decode(file_get_contents("php://input"));

    if (isset($data -> operation)){
        $operation = $data -> operation;


        if (!empty($operation)){

            switch ($operation){

                case 'register_user':

                    if (isset($data -> user) && !empty($data -> user)){

                        $user = $data -> user;

                        $nombres = $user -> nombres;
                        $apellidos = $user -> apellidos;
                        $doc_id = $user -> doc_id;
                        $tipo_id = $user -> tipo_id;
                        $cod_ocupacion = $user -> cod_ocupacion;
                        $universidad = $user -> universidad;
                        $programa = $user -> programa;
                        $semestre = $user -> semestre;
                        $telefono = $user -> telefono;
                        $email = $user -> email;
                        $estado_cuenta = $user -> estado_cuenta;
                        $fecha_creacion = $user -> fecha_creacion;                    
                        $pago_monto = $user -> pago_monto;
                        $url_qr = $user -> url_qr;
                        $fecha_lim_pago = $user -> fecha_lim_pago;
                        $password = $user -> password;
                        $remember_token = $user -> remember_token;
                        $admin = $user -> admin;
                        $ciudad = $user -> ciudad;

                       

                        echo $fun -> register_user($nombres,$apellidos,$doc_id,$tipo_id,$cod_ocupacion,$universidad,$programa,$semestre,$telefono,$email,$estado_cuenta,$fecha_creacion,$pago_monto,$url_qr,$fecha_lim_pago,$password,$remember_token,$admin,$ciudad);

                    }

                    break;
                    
                case 'login':

                    if(isset($data -> user ) && !empty($data -> user) && isset($data -> user -> email) && isset($data -> user -> password)){
                        $user = $data -> user;
                        $email = $user -> email;
                        $password = $user -> password;

                        echo $fun -> loginUser($email, $password);

                    } else {

                        echo $fun -> getMsgInvalidParam();

                    }

                    break;
                case 'chgPass':
                    
                    if(isset($data -> user ) && !empty($data -> user) && isset($data -> user -> email) && isset($data -> user -> oldPassword) && isset($data -> user -> newPassword)){

                        $user = $data -> user;
                        $email = $user -> email;
                        $old_password = $user -> oldPassword;
                        $new_password = $user -> newPassword;

                        echo $fun -> changePassword($email, $old_password, $new_password);

                    } else {

                        echo $fun -> getMsgInvalidParam();

                    }

                default:
                    



            }

        }else{
            
        }

    }

}