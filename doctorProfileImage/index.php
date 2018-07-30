<html>
<head>
<title>PHP AJAX Image Upload</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
$(document).ready(function (e) {
	$("#uploadForm1,#uploadForm2,#uploadForm3,#uploadForm4,#uploadForm5,#uploadForm6,#uploadForm7,#uploadForm8,#uploadForm9,#uploadForm10").each(function(){
    $(this).on('submit',(function(e) {
		var data = {
          "action": "test"
        };
		d = $(this).serialize() + "&" + $.param(data);
		e.preventDefault();
		$.ajax({
        	url: "upload.php",
			type: "POST",
			data:  new FormData(this), d,
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#target").html(data);
		    },
		  	error: function() 
	    	{
			$("#target").html("Image Upload Failed!");
	    	} 	        
	   });
	}));
	});
});
</script>
</head>
<body>
<div class="bgColor">
<br><br><br><br><br><br><br>
<?php $conn= new mysqli("localhost","root","","doctors_db");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else {
	$img = '';
	$sql= "SELECT dr_id, dr_name, dr_city FROM bl_doctor where dr_img='".$img."'";
	echo "<table><tr> <th><b>ID</b></th> <th><b>Name</b></th> <th><b>City</b></th> <th><b>Image</b></th> <th><b>Submit</b></th> </tr></table>";
	$i=0;
	if ($result=mysqli_query($conn,$sql))
  {
		while ($row=mysqli_fetch_row($result) and $i<5)
    {
       printf ('<form id="uploadForm1" action="upload.php" method="post"><div id="uploadFormLayer"><tr><td><input type="text" name="id" value="%s" /></td><td><input type="text" name="name" value="%s"/></td><td><input type="text" name="city" value="%s" /></td><td><input name="userImage" type="file" class="inputFile" /></td><td><input type="submit" value="Upload" class="btnSubmit" /></td></tr></div></form>',$row[0],$row[1],$row[2]);
	   $i++;
    }
	   mysqli_free_result($result);
	}
	mysqli_close($conn);
	echo '<br><br><br><br><br> <div id="target">No Image</div><div id="feedback"></div>';
	}
?>
</div>


<style>
table {
    width: 100%;
}
tr {
	padding: 15px;
    height: 50px;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</body>
</html>