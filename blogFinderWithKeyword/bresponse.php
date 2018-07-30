<?php
if (is_ajax()) {
  if (isset($_POST["action"]) && !empty($_POST["action"])) {
    $action = $_POST["action"];
	switch($action) { 
      case "test": test_function(); break;
    }
  }
}
function is_ajax() {
  return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
function test_function(){
  $return = $_POST;
  if ($return["coupon"]){
	$bkey  = $return["coupon"];
	$conn= new mysqli("localhost","root","","doctors_db");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	$return["coupon"] = '';
  }
  else{
	$sql1 = "SELECT url from blog1 where keyword = '$bkey';";
	$result = $conn->query($sql1);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
		$url = $row["url"];
  }  
  }
  $data = file_get_contents("$url");
  $return["key"] = $return["coupon"];
  $return["coupon"] = $data;	
  }
  }
  else{
	  $return["coupon"] = "";
  }
  $return["json"] = json_encode($return);
  echo json_encode($return);
}
?>