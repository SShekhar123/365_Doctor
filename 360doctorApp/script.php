<?php  
$conn= new mysqli("localhost","root","","doctors_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$qno = $_POST['qno'];
	$answer = $_POST['answer'];
	$cb = $_POST['cb'];  //on
if (empty($_POST["name"])||empty($_POST['answer'])||empty($_POST['email'])||empty($_POST['pass'])){
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {echo "Invalid name field<br>";}
	if (!preg_match("/^[a-zA-Z ]*$/",$email)) {echo "Invalid email field<br>";}
	if (!preg_match("/^[a-zA-Z ]*$/",$pass)) {echo "Invalid password field<br>";}
	if (!preg_match("/^[a-zA-Z ]*$/",$answer)) {echo "Invalid answer <br>";}
	$conn->close();
}
else{
	$sql = "INSERT INTO `register`(`name`, `email`, `password`, `question`, `answer`, `alerts`) VALUES('$name','$email','$pass','$qno','$answer','$cb');";
	if ($conn->query($sql) === TRUE) {
    echo "New Registration successful<br>";
		$sql = "insert into `users` values('$email','$pass')";
			if ($conn->query($sql) === TRUE) {
				echo "New User created successfully";
} 				else {
				echo "Error: " . $sql . "<br>" . $conn->error;
}
} 	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	
	}

	session_start();
		$_SESSION['Doctor']= $name;
	$conn->close();
header("Location: view.php");
}	
}
?>