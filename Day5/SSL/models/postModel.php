<?php 
class PostModel{

	public function getPost($postId){
		
		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("select * from posts where post_id = $postId");
		
		$st->execute(array(":postID"=>$postId));

		$obj = $st->fetchAll();
		
		return $obj;
	}// /getPost




	public function getAllPosts(){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("SELECT * FROM posts");
		
		$st->execute();

		$obj = $st->fetchAll();

		return $obj;
	}// /getPosts




	public function getPosts($uid){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("SELECT * FROM posts WHERE user_id = :uid");
		
		$st->execute(array(':uid'=>$uid));

		$obj = $st->fetchAll();

		return $obj;
	}// /getPosts




	public function getPostsLimit($start=0,$amt=10000){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("SELECT post_id, title, article, created, username FROM posts JOIN users ON users.user_id = posts.user_id ORDER BY created DESC LIMIT $start,$amt");
		
		$st->execute();

		$obj = $st->fetchAll();

		return $obj;
	}// /getPosts




	public function getUserPostsLimit($uid, $start=0,$amt=10000){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("SELECT post_id, title, article, created, username FROM posts JOIN users ON users.user_id = posts.user_id WHERE posts.user_id = :uid ORDER BY created DESC LIMIT $start,$amt");
		
		$st->execute(array(':uid'=>$uid));

		$obj = $st->fetchAll();

		return $obj;
	}// /getPosts





	public function newPost($userId = 0, $title='',$article=''){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("insert into posts(user_id, title, article, created) values(:uid, :title, :article, NOW())");
		//DATE_FORMAT(NOW(), '%c %d %Y')
		$st->execute(array(':uid'=>$userId, ':title'=>$title,':article'=>$article));

	}// /newPost



	public function updatePost($uid=0,$title,$article,$postId=0){
		
		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("update posts set
							title = :title,
							article = :article
							where post_id = :postId AND user_id = :uid");
		
		$st->execute(array('uid'=>$uid, ':title'=>$title,':article'=>$article,':postId'=>$postId));

	}// /updatePost



	public function deletePost($uid = 0, $postId=0){
		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("delete from posts where post_id = $postId AND user_id = :uid");
	 	
		$st->execute(array(':uid'=>$uid));

	}// /deletePost
}// /PostModel


?>