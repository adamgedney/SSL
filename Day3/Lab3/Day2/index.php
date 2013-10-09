
<?php 

//includes
include 'models/viewModel.php';
include 'models/validationModel.php';
include 'models/userModel.php';
include 'models/postModel.php';

//instances
$viewModel = new ViewModel();
$validationModel = new ValidationModel();
$userModel = new UserModel();
$postModel = new PostModel();


//array(key=>value, key=>value)
$data = array();

//includes header
$viewModel->getView("views/header.php", $data);


if(!empty($_GET["action"])){

	if($_GET["action"] == "login"){

		$email = $_POST['email'];
		$pass = $_POST['password'];

		$result = $validationModel->validateLogin($email, $pass);
		if($result == "true"){
			
			//loads admin view on validation success
			//******************************************NOTE!!!!  ?action=admin not in url now
			$viewModel->getView("controllers/admin.php", $data);

			echo "both login fields valid " . $result;
		}else{
		
			echo $result;
			$viewModel->getView("views/body.php", $data);
			
		}// /else

	}else if($_GET["action"] == "users"){

	$data = $usersModel->getUser(1);
	// var_dump($data);
	$viewModel->getView("views/body.php", $data);

	}else if($_GET["action"] == "home"){
		
		//this condition duplicates the code in the "Else" 
		//handles the landing page body post population
		//regardless of whether someone came via an internal
		//link or the domain name
		$data = $postModel->getPosts();

		$viewModel->getView("views/body.php", $data);
	
	}else if($_GET["action"] == "about"){
		
		$viewModel->getView("views/about.php", $data);
	
	}else if($_GET["action"] == "register"){
		
		$viewModel->getView("views/register.php", $data);
	
	}else if($_GET["action"] == "new-user"){
		
		//*****************************************NOTE!! Be sure everything is validated
		$username = $_POST['username'];
		$email = $_POST['email'];
		$first = $_POST['first'];
		$last = $_POST['last'];
		$gender = $_POST['gender'];
		$state = $_POST['state'];
		$url = $_POST['site'];
		$dob = $_POST['dob'];
		$phone = $_POST['phone'];
		$donation = $_POST['donate'];
		$pass = $_POST['password'];

		$result = $validationModel->ValidateReg($email, $gender, $state, $url, $dob, $phone, $donation, $pass);

		if($result == "true"){
			// var_dump("success");
			echo "true";

			//newUser DB CRUD function
			$userModel->newUser($username,$pass,$first,$last,$gender,$state,$url,$dob,$phone,$donation,$email);

			//loads admin view on validation success
			//******************************************NOTE!!!!  ?action=admin not in url now
			// $viewModel->getView("admin.php", $data);

		}else{
			echo "false $result";

			//loads register view again on valiation failure
			$viewModel->getView("register.php", $data);
		}
	}// /else if



}else{

	$data = $postModel->getPosts();

	//loads the landing page body on initial page load
	$viewModel->getView("views/body.php", $data);

}// /action



//includes footer
$viewModel->getView("views/footer.php", $data);



?>
		