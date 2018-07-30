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
	$coup  = $return["coupon"];
	$user = $return["user"];
	$conn= new mysqli("localhost","root","","doctors_db");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	$return["coupon"] = '';
  }
  else{
	$sql1 = "SELECT v.value, v.price, u.count, u.max_count FROM couponvalue as v, couponuser as u where v.coupon_no = '$coup' AND u.user_id = '$user' AND v.coupon_id = u.coupon_id;";
	$result = $conn->query($sql1);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
		$couponVal = $row["price"];
		$couponType = $row["value"];
		$used = $row["count"];
		$max = $row["max_count"];
  }
	if($used<$max){
	if(isset($couponType) && isset($couponVal)){
		if($couponType=='P'){
			$return["coupon"] = ($couponVal)/100;
		}
		else{
			$return["coupon"] = $couponVal;
		}
	}
	else{
		$return["coupon"] = "";
	}
	}
	else{
		$return["coupon"] = "";
	}
	
  }
	else{
	$return["coupon"] = "";
	}
  }
  }
  $return["json"] = json_encode($return);
  echo json_encode($return);
}
?>