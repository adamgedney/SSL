<?php
 session_start(); 

include 'models/imageModel.php';
include 'models/captcha.php';
include 'models/viewModel.php';

$view = new ViewModel();
$cap = new CapClass();



 	
var_dump($_SESSION['random_code']); 
var_dump($_SESSION['current']); 
// $img = new Img();
$cap->captiaGen();

// var_dump($img->getGD());

// $img->imageCopy('/Users/adamgedney/Documents/_Graphics/images/cabernet_cluster.jpg', '/Users/adamgedney/Documents/_Graphics/images/cabernet_cluster_new.jpg');


	if($_GET['action'] == 'upload'){


		//$path = '/Users/adamgedney/Documents/_Graphics/images/'.$_POST['file'];
		
		// $img->imageCopy($path, '/Users/adamgedney/Documents/_Graphics/images/cabernet_cluster_new3.jpg');
		
		// $img->fileUpload($_FILES["file"]);
		

		var_dump($_POST['captchaText']);
		
		if($_SESSION['current'] == $_POST['captchaText']){

			echo "valid";
		}else{
			echo "failed";
		}
	}else if($_GET['action'] == 'form'){

		$view->getView('views/form.php');

		$_SESSION['current'] = $_SESSION['random_code'];
	}

// var_dump($_SESSION['rand_code']);


// $img->imageResize('/Users/adamgedney/Documents/_Graphics/images/cabernet_cluster.jpg', '/Users/adamgedney/Documents/_Graphics/images/cabernet_cluster_resized1.jpg', 250, 250);

// $img->msg('Weird Watermark');
?>
<a href="?action=form">Go to form</a>

