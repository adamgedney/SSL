<?php
session_start();
//includes
include 'models/viewModel.php';
include 'models/postModel.php';
include 'models/userModel.php';

//handles session login
include "models/protector.php";

//instances
$viewModel = new ViewModel();
$postModel = new PostModel();
$userModel = new UserModel();


	if(!empty($_GET["action"])){

		
		if($_GET['action'] === 'view-posts'){ 

			//includes header
			$viewModel->getView("views/headerLoggedIn.php");

			//includes admin body
			$viewModel->getView("views/adminBody.php");
			?>

			<h2 class="title"><?='Posts'?></h2>
				<div id="temp"> <?php

			if($_GET['page']){
				$start = ($_GET['page'] - 1) * 10;

			}else{
				$start = (1 - 1) * 10;
			}
			
			$uid = $_SESSION['user_id'];

			// get and render posts for admin view posts
			$viewModel->getView("views/adminPosts.php", $postModel->getUserPostsLimit($uid,$start,10));
			
			$posts = $postModel->getPosts($uid);
			//includes footer
			$viewModel->getView("views/adminFooter.php", $posts);

		}else if($_GET['action'] === 'edit-post-view'){ 

			//includes header
			$viewModel->getView("views/headerLoggedIn.php");

			//includes admin body
			$viewModel->getView("views/adminBody.php");
			?>

			<h2 class="title"><?='Edit Post'?></h2>
				<div id="temp"> <?php

			$id = $_GET['postId'];
			$data = $postModel->getPost($id);
			
			// get and render posts for admin view posts
			$viewModel->getView("views/adminEditPost.php", $data);


		}else if($_GET['action'] === 'edit-post'){ ?>

			<h2 class="title"><?='Edit Post'?></h2>
				<div id="temp"> <?php

			$uid = $_SESSION['user_id'];
			$title = $_POST['post-title'];
			$article = $_POST['wysiwyg'];
			$postId = $_GET['postId'];

			$data = $postModel->updatePost($uid,$title,$article,$postId);

			?>
			<script>
				(function(){
					window.location = "admin.php?action=view-posts&page=1";
				})();
			</script>
			<?php

		}else if($_GET['action'] === 'new-post-view'){ 

			//includes header
			$viewModel->getView("views/headerLoggedIn.php");

			//includes admin body
			$viewModel->getView("views/adminBody.php");
			?>

			<h2 class="title"><?='New Post'?></h2>
				<div id="temp"> <?php
			
			// get and render posts for admin new post view
			$viewModel->getView("views/adminNewPost.php");


		}else if($_GET['action'] === 'new-post'){ ?>

			<h2 class="title"><?='New Post'?></h2>
				<div id="temp"> <?php

			$uid = $_SESSION['user_id'];
			$title = $_POST['new-post-title'];
			$article = $_POST['new-post-wysiwyg'];
			
			//on new post save
			$postModel->newPost($uid, $title,$article);

			?>
			<script>
				(function(){
					window.location = "admin.php?action=view-posts&page=1";
				})();
			</script>
			<?php

		
		}else if($_GET['action'] === 'delete-post'){ ?>

			<h2 class="title"><?='Posts'?></h2>
				<div id="temp"> <?php

			$uid = $_SESSION['user_id'];
			$postId = $_GET['postId'];
			$postModel->deletePost($uid, $postId);

			?>
			<script>
				(function(){
					window.location = "admin.php?action=view-posts&page=1";
				})();
			</script>
			<?php


		}else if($_GET['action'] === 'user-settings'){ 

			//includes header
			$viewModel->getView("views/headerLoggedIn.php");

			//includes admin body
			$viewModel->getView("views/adminBody.php");
			?>

			<h2 class="title"><?='User Settings'?></h2>
				<div id="temp"> <?php

			//***********maybe get this from the session*************?
			$userId = $_SESSION['user_id'];

			$data = $userModel->getUser($userId);
			
			// get and render posts for admin view posts
			$viewModel->getView("views/adminUserSettings.php", $data);


		}else if($_GET['action'] === 'update-user'){ 

			//includes header
			$viewModel->getView("views/headerLoggedIn.php");

			//includes admin body
			$viewModel->getView("views/adminBody.php");
			?>

			<h2 class="title"><?='User Settings'?></h2>
				<div id="temp"> <?php

			$un = $_POST['username'];
			$pw = $_POST['password'];
			$first = $_POST['first'];
			$last = $_POST['last'];
			$gender = $_POST['gender'];
			$state = $_POST['state'];
			$website = $_POST['site'];
			$dob = $_POST['dob'];
			$phone = $_POST['phone'];
			$donation = $_POST['donate'];
			$email = $_POST['email'];
			
			$userId = $_SESSION['user_id'];

			//handles user update
			$userModel->updateUser($un,$pw,$first,$last,$gender,$state,$website,$dob,$phone,$donation,$email,$userId);

			$data = $userModel->getUser($userId);
			
			// get and render posts for admin view posts
			$viewModel->getView("views/adminUserSettings.php", $data);

		}else if($_GET['action'] === "logout"){

			$_SESSION['loggedin'] = 0;
			// session_destroy();

			header("location: /index.php?action=home&page=1&s=0");

			session_destroy();

		}else if($_GET['action'] === 'delete-user'){ ?>

			<h2 class="title"><?='User Settings'?></h2>
				<div id="temp"> <?php

			//***********maybe get this from the session*************?
			$userId = $_SESSION['user_id'];

			$userModel->deleteUser($userId);
			echo "user ". $userId . " successfully deleted";
			//*******************This should log the user out***********
			// get and render posts for admin view posts
			// $viewModel->getView("views/adminUserSettings.php", $data);

		}// /else if
	}else{ 

			//includes header
			$viewModel->getView("views/headerLoggedIn.php");

			//includes admin body
			$viewModel->getView("views/adminBody.php");
			?>

			<h2 class="title"><?='Posts'?></h2>
				<div id="temp"> <?php

		?>
			<script>
				(function(){
					window.location = "admin.php?action=view-posts&page=1";
				})();
			</script>
			<?php
	}// /if action
?>



<?php

$uid = $_SESSION['user_id'];

$posts = $postModel->getPosts($uid);
//includes footer
$viewModel->getView("views/adminFooter.php", $posts);

//includes footer
$viewModel->getView("views/footer.php");
?>