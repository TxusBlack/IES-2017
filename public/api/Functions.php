
<?php
/**
 * Created by PhpStorm.
 * User: julian
 * Date: 19/08/17
 * Time: 11:23 AM
 */

require_once 'DBOperations.php';
require 'PHPMailer/PHPMailerAutoload.php';


class Functions {

    private $db;
    private $mail;

    /**
     * Functions constructor.
     * @param $db
     */
    public function __construct()
    {
        $this-> db = new DBOperations();
         $this -> mail = new PHPMailer;
    }



    public function register_user($nombres,$apellidos,$doc_id,$tipo_id,$cod_ocupacion,$universidad,$programa,$semestre,$telefono,$email,$estado_cuenta,$fecha_creacion,$pago_monto,$url_qr,$fecha_lim_pago,$password,$remember_token,$admin,$ciudad)
    {


$this -> sendEmail($email);
        $db = $this -> db;
        if (!empty($email)){
            
            if (!$db -> check_user($email)){
                
                
                if(!$db -> check_id($doc_id)){
                    
                     $result = $db -> insertUser($nombres,$apellidos,$doc_id,$tipo_id,$cod_ocupacion,$universidad,$programa,$semestre,$telefono,$email,$estado_cuenta,$fecha_creacion,$pago_monto,$url_qr,$fecha_lim_pago,$password,$remember_token,$admin,$ciudad);

                if ($result){
                    
                    $this -> sendEmail($email);
                    
                    $response["result"]="succes";
                    $response["message"]="Usuario insertado correctamente";
                    return json_encode($response);
                }else{
                    $response["result"]="failed";
                    $response["message"]="Ocurrio un error al insertar el usuario";
                    return json_encode($response);
                }
                }else{
                    //cedula ya esta registrado
                    $response["result"] = "failure";
                    $response["message"] = "1";
                    return json_encode($response);
                }



               

            }else{
                    //usuario ya esta registrado
                    $response["result"] = "failure";
                    $response["message"] = "0";
                    return json_encode($response);
                }
        }else{

            $response["result"] = "failure";
            $response["message"] = "Usuario ya está registrado, inicia sesión con tu contraseña";
            return json_encode($response);
        }

    }



public function loginUser($email, $password) {

  $db = $this -> db;

  if (!empty($email) && !empty($password)) {
      

    if ($db -> check_user($email)) {

       $result =  $db -> checkLogin($email, $password);


       if(!$result) {

        

        //password incorrecta
        $response["result"] = "failure";
        $response["message"] = "1";
        return json_encode($response);

       } else {

        $response["result"] = "success";
        $response["message"] = "Inicio de sesión correcto";
        $response["user"] = $result;
        return json_encode($response);

       }

    } else {

      $response["result"] = "failure";
      $response["message"] = "1";
      return json_encode($response);

    }
  } else {

      return $this -> getMsgParamNotEmpty();
    }

}









public function sendEmail($email){
  $mail = $this -> mail;
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host = 'ies.grupohydraunisangil.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'registro@ies.grupohydraunisangil.com';
  $mail->Password = 'm2?WroJF3=_E';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;
 
  $mail->From = 'registro@ies.grupohydraunisangil.com';
  $mail->FromName = 'IES Unisangil';
  $mail->addAddress($email, 'Your Name');
 
  $mail->addReplyTo('ies@unisangil.edu.co', 'IES unisangil');
 
  $mail->WordWrap = 50;
  $mail->isHTML(true);
 
  $mail->Subject = 'Gracias por registrarte ';
  $mail->Body    = '
  <h2>Gracias por Pre-registrarte al IES Unisangil 2017</h2>
<p><strong><em>Recuerda:</em></strong></p>
<p><strong>*&nbsp;</strong>Fecha limite de pago: 9 de septiembre de 2017.</p>
<p><strong>*&nbsp;</strong>Una vez realices el pago, debes dejar copia del recibo en&nbsp;<strong>Tesorer&iacute;a de Unisangil</strong>, adjuntando tu direcci&oacute;n de correo electr&oacute;nico con el cu&aacute;l te registraste, para enviarte el codigo de acceso a las conferencias y as&iacute; quedar inscrito al IES Unisangil 2017.</p>
<p><strong>*&nbsp;</strong>Tan pronto se genere tu c&oacute;digo de acceso recibir&aacute;s un correo de confirmaci&oacute;n. Podras visualizar t&uacute; c&oacute;digo ingresando a la aplicaci&oacute;n.</p>
<p><a href="https://play.google.com/store/apps/details?id=com.unisangil.ies" target="_blank" rel="noopener">Descarga la App</a></p>
<p>&nbsp;</p>

';

$mail->send();

/*
  
  if(!$mail->send()) {
  
    $response["result"] = "failure";
    $response["message"] = "Reset Password Failure";
    $response["error"] = $mail->ErrorInfo;
    echo json_encode($response);
  } else {
    
    $response["result"] = "success";
        $response["message"] = "Check your mail for reset password code.";
        echo json_encode($response);
  }
  */
}






public function changePassword($email, $old_password, $new_password) {

  $db = $this -> db;

  if (!empty($email) && !empty($old_password) && !empty($new_password)) {

    if(!$db -> checkLogin($email, $old_password)){

      $response["result"] = "failure";
      $response["message"] = 'Invalid Old Password';
      return json_encode($response);

    } else {


    $result = $db -> changePassword($email, $new_password);

      if($result) {

        $response["result"] = "success";
        $response["message"] = "Password Changed Successfully";
        return json_encode($response);

      } else {

        $response["result"] = "failure";
        $response["message"] = 'Error Updating Password';
        return json_encode($response);

      }

    } 
  } else {

      return $this -> getMsgParamNotEmpty();
  }

}

public function getMsgParamNotEmpty(){


  $response["result"] = "failure";
  $response["message"] = "Parameters should not be empty !";
  return json_encode($response);

}


public function getMsgInvalidParam(){

  $response["result"] = "failure";
  $response["message"] = "Invalid Parameters";
  return json_encode($response);

}

}
