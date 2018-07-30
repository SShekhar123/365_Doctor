<?php
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
$sourcePath = $_FILES['userImage']['tmp_name'];
$targetPath = "doctor-images/".$_FILES['userImage']['name'];
if(move_uploaded_file($sourcePath,$targetPath)) {
	echo "Moved Successfully<br>";
}
}
	$return = $_POST;
	$name  = $return["name"];
	$city  = $return["city"];
	$id  = $return["id"];
	$conn= new mysqli("localhost","root","","doctors_db");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else{
	$sql = "UPDATE bl_doctor SET dr_img = '".$targetPath."' WHERE dr_id='".$id."';" ;
	
	if ($conn->query($sql) === TRUE) {
    echo "Image updated successfully";
	}
 	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
		
	}
}
?>