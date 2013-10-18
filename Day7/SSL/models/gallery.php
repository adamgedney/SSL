<?php
class Gallery{

	//uploads image to images/library directory
	public function imgUpload($file){

		$tempfile = $file["tmp_name"];

		$dir = "images/library/".$file['name'];
		move_uploaded_file($tempfile,$dir);
	
	 }// /imgUpload


	 //gets images from the images/library directory
	 public function getImages(){

	 	$path = "images/library";
	 	$dir = scandir($path);

	 	$imgs = array();

	 	//adds each file to an array for function return
	 	foreach($dir as $file){
	 		//filters directory of non image files
	 		if(($file!='..') && ($file!='.') && ($file!='.DS_Store')){
	 			array_push($imgs, $file);
	 		}
	 	}

	 	return $imgs;
	 }// /getImages

}// /class

?>