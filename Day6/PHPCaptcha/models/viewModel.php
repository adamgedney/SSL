<?php 
class ViewModel{

	///php constructor. Runs as soon as class is instantiated
	//public function __construct(){
	//}


	public function getView($myfile="", $data=array(), $posts=array()){

		include $myfile;
	}
}
?>