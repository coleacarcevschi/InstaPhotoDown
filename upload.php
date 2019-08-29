<?php
set_time_limit(0);
include_once("InstaPhoto.php");

$username = 'login';//логин аккаунта 
$password = 'paroli'; //пароль аккаунта
$count = '10';

$obj = new InstagramUpload();
$obj->Login($username, $password);
 for($i = 1; $i< $count; $i++){
$dir = "botImages/"; 
$img_a = array(); 
    if (is_dir($dir)){ 	
        if($od = opendir($dir)){ 		
while(($file = readdir($od)) !== false){ 		
	if(strtolower(strstr($file, "."))===".jpg" || strtolower(strstr($file, "."))===".gif" || strtolower(strstr($file, "."))===".png"){ 				array_push($img_a, $file); 			
        } 		
    } 		
closedir($od); 	
    } 
 } 
$rd = rand(0, count($img_a)-1); 
$foto = $dir.$img_a[$rd];
    $obj->UploadPhoto($foto, $caption);
      echo "Загрузили [" .$i."] фото <br>";
}



 	
?>	