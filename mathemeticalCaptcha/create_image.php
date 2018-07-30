<?php 
session_start();
create_image(); 
exit(); 

function create_image() 
{  
    $a = rand(0,999); 
    $b = rand(0,999);  
    if($a<$b){
	$security = $a + $b; 
    $security_code = $a . " + " . $b; 
	}
	else{
	$security = $a - $b; 
    $security_code = $a . " - " . $b;
	}
    $_SESSION["security_code"] = $security;

    $width = 100; 
    $height = 20;  

	$image = ImageCreate($width, $height);  

    $white = ImageColorAllocate($image, 255, 255, 255); 
    $black = ImageColorAllocate($image, 0, 0, 0); 
    $grey = ImageColorAllocate($image, 204, 204, 204); 

    ImageFill($image, 0, 0, $black); 

    ImageString($image, 3, 30, 3, $security_code, $white); 

    ImageRectangle($image,0,0,$width-1,$height-1,$grey); 
   // imageline($image, 0, $height/2, $width, $height/2, $grey); 
   // imageline($image, $width/2, 0, $width/2, $height, $grey); 
 
    header("Content-Type: image/jpeg"); 

    ImageJpeg($image); 
    
    ImageDestroy($image); 
} 
?>