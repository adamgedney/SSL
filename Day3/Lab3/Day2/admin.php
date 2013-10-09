
<?php

//includes
include 'models/viewModel.php';
include 'models/postModel.php';
include 'models/userModel.php';

//instances
$viewModel = new ViewModel();
$postModel = new PostModel();
$userModel = new UserModel();

//includes header
$viewModel->getView("views/header.php");

//includes admin body
$viewModel->getView("views/adminBody.php");




	if(!empty($_GET["action"])){

		if($_GET['action'] === 'view-posts'){ ?>

			<h2 class="title"><?='Posts'?></h2>
				<div id="temp"> <?php

			// get and render posts for admin view posts
			$viewModel->getView("views/adminPosts.php", $postModel->getPosts());

		}else if($_GET['action'] === 'edit-post-view'){ ?>

			<h2 class="title"><?='Edit Post'?></h2>
				<div id="temp"> <?php

			$id = $_GET['postId'];
			$data = $postModel->getPost($id);
			// get and render posts for admin view posts
			$viewModel->getView("views/adminEditPost.php", $data);

		}else if($_GET['action'] === 'edit-post'){ ?>

			<h2 class="title"><?='Edit Post'?></h2>
				<div id="temp"> <?php

			$title = $_POST['post-title'];
			$article = $_POST['wysiwyg'];
			$postId = $_GET['postId'];

			$data = $postModel->updatePost($title,$article,$postId);

			// get and render posts for admin view posts
			$viewModel->getView("views/adminPosts.php", $postModel->getPosts());

		}else if($_GET['action'] === 'new-post-view'){ ?>

			<h2 class="title"><?='New Post'?></h2>
				<div id="temp"> <?php

			// // get and render posts for admin new post view
			$viewModel->getView("views/adminNewPost.php");

		}else if($_GET['action'] === 'new-post'){ ?>

			<h2 class="title"><?='New Post'?></h2>
				<div id="temp"> <?php

			$title = $_POST['new-post-title'];
			$article = $_POST['new-post-wysiwyg'];
			
			//on new post save
			$postModel->newPost($title,$article);

			// get and render posts for admin view posts
			$viewModel->getView("views/adminPosts.php", $postModel->getPosts());
		
		}else if($_GET['action'] === 'delete-post'){ ?>

			<h2 class="title"><?='Posts'?></h2>
				<div id="temp"> <?php

			$postId = $_GET['postId'];
			$postModel->deletePost($postId);

			// get and render posts for admin view posts
			$viewModel->getView("views/adminPosts.php", $postModel->getPosts());

		}else if($_GET['action'] === 'user-settings'){ ?>

			<h2 class="title"><?='User Settings'?></h2>
				<div id="temp"> <?php

			//***********maybe get this from the session*************?
			$userId = 3;

			$data = $userModel->getUser($userId);

			// get and render posts for admin view posts
			$viewModel->getView("views/adminUserSettings.php", $data);

		}else if($_GET['action'] === 'update-user'){ ?>

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
			
			//***********maybe get this from the session*************?
			$userId = 3;

			//handles user update
			$userModel->updateUser($un,$pw,$first,$last,$gender,$state,$website,$dob,$phone,$donation,$email,$userId);

			$data = $userModel->getUser($userId);
			
			// get and render posts for admin view posts
			$viewModel->getView("views/adminUserSettings.php", $data);

		}else if($_GET['action'] === 'delete-user'){ ?>

			<h2 class="title"><?='User Settings'?></h2>
				<div id="temp"> <?php

			//***********maybe get this from the session*************?
			$userId = 2;

			$userModel->deleteUser($userId);
			echo "user ". $userId . " successfully deleted";
			//*******************This should log the user out***********
			// get and render posts for admin view posts
			// $viewModel->getView("views/adminUserSettings.php", $data);

		}// /else if
	}else{ ?>

			<h2 class="title"><?='Posts'?></h2>
				<div id="temp"> <?php

		// get and render posts for admin view posts
		$viewModel->getView("views/adminPosts.php", $postModel->getPosts());
	}// /if action

?>

			</div><!-- /#temp-->
	</div><!-- /.admin-content-->
</div><!-- /.admin-page-->

<?php
//includes footer
$viewModel->getView("views/footer.php");
?>








