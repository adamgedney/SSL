<?php 
session_start();
//includes
include 'models/viewModel.php';
include 'models/validationModel.php';
include 'models/userModel.php';
include 'models/postModel.php';
include 'models/checklogin.php';

//instances
$viewModel = new ViewModel();
$validationModel = new ValidationModel();
$userModel = new UserModel();
$postModel = new PostModel();
$loginModel = new ckUser();

$data = array();

if(isset($_GET['action'])){
	$action = $_GET['action'];
}else{
	$action = "";
}

// $sid = session_id();
// 		if($sid){
			
// 		}

if(!empty($_GET["action"])){

	if($_GET["action"] == "login"){

		$email = $_POST['email'];
		$pass = $_POST['password'];

		$result = $validationModel->validateLogin($email, $pass);
		
		if($result == "true"){
			$loginFields = array("email"=>$_POST['email'], "pass"=>$_POST['password']);
			
			$test = $loginModel->checkUser($loginFields);

				if($test == 1){

					 header("location: /admin.php?action=view-posts&page=1");

				}else{
					//loads home again on authentication failure
					// header("location: /index.php?action=home&page=1");
					echo "User Doesn't Exist";
				}
		}else{
		
			// echo $result + " Login Failed";
			// $viewModel->getView("views/body.php", $data);
			
		}// /else

	}else if($action == "logout"){
		
		 // header("location: /index.php?action=home&page=1");

		// var_dump($_SESSION['loggedin']);
		$viewModel->getView("views/header.php");

		
		$start = (1 - 1) * 10;
		$posts = $postModel->getAllPosts();
		

		//loads the landing page body on initial page load
		$viewModel->getView("views/body.php", $postModel->getPostsLimit($start,10), $posts);

		$_SESSION['loggedin'] = 0;
		$_SESSION['user_id'] = 0;

		session_destroy();
		// session_start();
		// $_SESSION['loggedin'] = 0;

	}else if($_GET["action"] == "users"){

		$data = $usersModel->getUser($_SESSION['user_id']);
		
		$viewModel->getView("views/body.php", $data);

	}else if($_GET["action"] == "home"){
		
		//this condition duplicates the code in the "Else" 
		//this handles the landing page body post population
		//regardless of whether someone came via an internal
		//link or the domain name
		
		//includes header here to resolve session header location issue on checklogin
	
		if($_SESSION['loggedin'] == 1){
			$viewModel->getView("views/headerLoggedIn.php");
		}else{
			$viewModel->getView("views/header.php");
		}
		
	
	if($_GET['page']){
		$start = ($_GET['page'] - 1) * 10;

	}else{
		$start = (1 - 1) * 10;
	}
	
	$uid = $_SESSION['user_id'];

	$posts = $postModel->getAllPosts();
	$viewModel->getView("views/body.php", $postModel->getPostsLimit($start,10), $posts);

		
	}else if($_GET["action"] == "about"){
		//includes header
		
		if($_SESSION['loggedin'] == 1){
			$viewModel->getView("views/headerLoggedIn.php");
		}else{
			$viewModel->getView("views/header.php");
		}
		

		$viewModel->getView("views/about.php", $data);
	
	}else if($_GET["action"] == "register"){
		//includes header
		
		if($_SESSION['loggedin'] == 1){
			$viewModel->getView("views/headerLoggedIn.php");
		}else{
			$viewModel->getView("views/header.php");
		}
		

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

			//newUser DB CRUD function
			$userModel->newUser($username,$pass,$first,$last,$gender,$state,$url,$dob,$phone,$donation,$email);

			//loads admin view on validation success
			header("location: admin.php?action=view-posts&page=1");
		}else{
			
			//loads home again on valiation failure
			header("location: index.php?action=home&page=1");
		}
	}// /else if



}else{

	
		if($_SESSION['loggedin'] == 1){
			$viewModel->getView("views/headerLoggedIn.php");
		}else{
			$viewModel->getView("views/header.php");
		}
		

	if($_GET['page']){
		$start = ($_GET['page'] - 1) * 10;

	}else{
		$start = (1 - 1) * 10;
	}
	$uid = $_SESSION['user_id'];		
	//loads the landing page body on initial page load
	$viewModel->getView("views/body.php", $postModel->getUserPostsLimit($uid,$start,10));

}// /action



//includes footer
$viewModel->getView("views/footer.php", $data);



?>