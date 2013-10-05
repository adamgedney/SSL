
<?php 
//include 'models/view.php';
//error_reporting("OFF");

//equivalent to AS3 imports
include 'models/viewModel.php';
include 'models/validationModel.php';



//instantiates the viewModel class
$viewModel = new ViewModel();
$validationModel = new ValidationModel();

//array(key=>value, key=>value)
$data = array("contact"=>"");

//includes header
$viewModel->getView("views/header.php", $data);

//login form validation
if(!empty($_GET["action"]) && $_GET["action"] == "login"){

		$email = $_POST['email'];
		$pass = $_POST['password'];

		$result = $validationModel->validateLogin($email, $pass);
		if($result == "true"){
			//includes CMS
			$viewModel->getView("admin.php", $data);
		}else{
			//includes body
			//$viewModel->getView("views/body.php", $data);

			
			//returns json data on fail
			//for the ajax call to login
			$r = array($result);
			echo json_encode($r);
			
		}


}


//includes body
$viewModel->getView("views/body.php", $data);

//includes footer
$viewModel->getView("views/footer.php", $data);



?>
		