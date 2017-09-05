<?php 
	require_once 'DbOperation.php';
	//require_once DbOperation.php;
	
	
	
	
	$response = array(); 

	if($_SERVER['REQUEST_METHOD']=='POST'){

		$token = $_POST['token'];
		$email = $_POST['email'];
		$device = $_POST['device'];
		
		$db = new DbOperation();
		
		

		$result = $db->registerDevice($email,$token,$device);

		if($result == 0){
			$response['error'] = false; 
			$response['message'] = 'Dispositivo registrado correctamente';
		}elseif($result == 2){
			$response['error'] = false; 
			$response['message'] = 'Token Actualizado';
		}else{
			$response['error'] = true;
			$response['message']='Device not registered';
		}
	}else{
		$response['error']=true;
		$response['message']='Invalid Request...';
	}

	echo json_encode($response);