<?php
session_start();
  $return = $_POST;
  if($_SESSION["security_code"] == $return["txtCaptcha"]){
	  echo "Captcha Validated";
  }
  else{
	  echo "Invalid Captcha";
  }
?>