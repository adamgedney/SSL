<?php
    
    
 class  CapClass{
    

public function captiaGen(){

		$string = '';  
      
    for ($i = 0; $i < 5; $i++) {  
        // this numbers refer to numbers of the ascii table (lower case)  
        $string .= chr(rand(97, 122));  
    }  
      
    $_SESSION['random_code'] = $string;

    $dir = 'fonts/';  

    $image = imagecreate(170, 60);  
    $black = imagecolorallocate($image, 0, 0, 0);  
    $color = imagecolorallocate($image, 200, 100, 90); // red  
    $white = imagecolorallocate($image, 255, 255, 255);  
      
    imagefilledrectangle($image,0,0,399,99,$white);  
    imagettftext ($image, 30, 0, 10, 40, $color, $dir."Bilbo-Regular.ttf", $_SESSION['random_code']);  

    imagepng($image, '/Applications/MAMP/htdocs/SSL_FileUpload/cap.png'); 
    imagedestroy($image); 
   }
} // /class
?>