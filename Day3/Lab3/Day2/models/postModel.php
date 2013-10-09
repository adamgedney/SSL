
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




	public function getPosts(){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("SELECT * FROM posts ORDER BY created DESC");
		
		$st->execute();

		$obj = $st->fetchAll();

		return $obj;
	}// /getPosts



	public function newPost($title='',$article=''){

		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("insert into posts(title,article, created) values(:title, :article, NOW())");
		
		$st->execute(array(':title'=>$title,':article'=>$article));

	}// /newPost



	public function updatePost($title,$article,$postId=0){
		
		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("update posts set
							title = :title,
							article = :article
							where post_id = :postId");
		
		$st->execute(array(':title'=>$title,':article'=>$article,':postId'=>$postId));

	}// /updatePost



	public function deletePost($postId=0){
		$db = new PDO("mysql:hostname=localhost;dbname=bloggityDB","root","root");

		//$st means statement
		$st = $db->prepare("delete from posts where post_id = $postId");
	 	
		$st->execute();

	}// /deletePost
}// /PostModel


?>
		