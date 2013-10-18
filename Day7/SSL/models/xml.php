<?php

class XML{

	//api/bloggityposts.xml
	public function makeXML($posts){

		$xml = "<posts>";

		foreach($posts as $p){
		  $xml .= "<post>";	
			  $xml .= "<title>".$p['title']."</title>"; 
			  $xml .= "<created>".$p['created']."</created>";   
			  $xml .= "<username>".$p['username']."</username>"; 
			  $xml .= "<article>".$p['article']."</article>"; 
		  $xml .= "</post>";  

		}

		$xml .= "</posts>";
		$sxe = new SimpleXMLElement($xml);
		header('Content-type: text/html');
		$x = $sxe->asXML("api/posts.xml");

	}// /makeXML

}// /class
?>