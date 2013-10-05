
<?php 
class ValidationModel{

	///php constructor. Runs as soon as class is instantiated
	//public function __construct(){
	//}

public function validateLogin($email, $password){
		
		$emailPat = "/^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$/"; // standard email validation
		$passPat = "/^([a-zA-Z0-9@*#]{8,15})$/"; //8-15 characters

		//preg_match compares regex to string
		if(!preg_match($emailPat, $email) && preg_match($passPat, $password)){
			return "Email Invalid";;
		}else if(!preg_match($passPat, $password) && preg_match($emailPat, $email)){
			return "Password Invalid";
		}else if(!preg_match($emailPat, $email) && !preg_match($passPat, $password)){
			return "Username & Password Invalid";
		}else{
			return "true";
		}

}// /validateLogin

public function validateReg($email, $gender, $state, $url, $dob, $phone, $donation, $pass){

	$emailPat = "/^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$/"; // standard email validation
	$urlPat = "#^http\://[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(/\S*)?$#";//http://example.com
	$datePat = "/^\d{1,2}\/\d{1,2}\/\d{4}$/";// 12/12/2012
	$phonePat = "/^[2-9]\d{2}-\d{3}-\d{4}$/"; //845-216-5030 
	$currencyPat = "/^(\$)?(([1-9]\d{0,2}(\,\d{3})*)|([1-9]\d*)|(0))(\.\d{2})?$/";// $12.20 12.20 12 .20
	$passPat = "/^[a-zA-Z]\w{3,14}$/"; //4-15 char abcd aBcd ac3D

	if(!preg_match($emailPat, $email)){
		return "Email Invalid";
	}else if(!$gender){
		return "Please choose a gender";
	}else if(!$state){
		return "Please choose a state";
	}else if(!preg_match($urlPat, $url)){
		return "URL Invalid";
	}else if(!preg_match($datePat, $dob)){
		return "Date Invalid";
	}else if(!preg_match($phonePat, $phone)){
		return "Phone Number Invalid";
	}else if(!preg_match($currencyPat, $donation)){
		return "Format Invalid $donation";
	}else if(!preg_match($passPat, $pass)){
		return "Password Invalid";
	}else{
		return "true";
	}


}// /validateReg

}// Class
?>
		