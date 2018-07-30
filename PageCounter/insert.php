<?php
// Write the contents to the file, 
// using the FILE_APPEND flag to append the content to the end of the file
// and the LOCK_EX flag to prevent anyone else writing to the file at the same time
//PHP_EOL (string) The correct 'End Of Line' symbol for this platform.
 session_start();
 function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip;
 if(isset($_SESSION["views"])){
	 $_SESSION["views"]++;
 }
 else{
	 $_SESSION["views"] = 1;
 }
 $txt = $_SESSION["views"];
 
 echo $txt;
 //$txt = "ip1:postid1,";
 $myfile = file_put_contents('newfile.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
 //$myfile = file_put_contents('newfile.txt', $txt, FILE_APPEND | LOCK_EX);
 //Documented by Bharat
?>