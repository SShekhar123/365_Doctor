<?php
$id = rand(1,5);
$msg = "";
$conn = new mysqli("localhost","root","","doctors_db");
	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
	else {
	  $sql= "SELECT * FROM dr_quotes where quotes_id='". $id ."'";
	if ($result=mysqli_query($conn,$sql))
  {
      while ($row=mysqli_fetch_row($result))
    {
      $msg = $row[2];
    }
	  mysqli_free_result($result);
  }
	  mysqli_close($conn);
 }
 $l = strlen($msg);

 if($l>150){
  echo "<center><img id='textScreenshot' style='height:750px; width:750px;' /></center> <br> <center><div id='talltweets' style='height:750px; width:750px;'>". $msg ."</div></center>";
  }

 else if($l>100){
  echo "<center><img id='textScreenshot'  style='height:600px; width:600px;' /></center><br> <center><div id='talltweets' style='height:600px; width:600px;'>". $msg ."</div></center>";
  }

 else if($l>=60){
  echo "<center><img id='textScreenshot' style='height:500px; width:600px;'/></center><br> <center><div id='talltweets' style='height:500px; width:600px;'>". $msg ."</div></center>";
  }
 else if($l>50){
  echo "<center><img id='textScreenshot'  style='height:400px; width:600px;'/></center><br> <center><div id='talltweets' style='height:400px; width:600px;'>". $msg ."</div></center>";
  }
 else{
  echo " <center><img id='textScreenshot'  style='height:300px; width:600px;'/></center><br> <center><div id='talltweets' style='height:300px; width:600px;'>". $msg ."</div></center>";
  }
?>

<div id="res"></div>
<script src="html2canvas.js"></script>
<style>
#textScreenshot, #talltweets {
font-weight: bold;
font-size:40px;
font-family:Calibri;
line-height: 100px; padding-top:50px; color:#ffffff;
 display: flex;
    align-items: center;
    justify-content: center;}
</style>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript">
    $("document").ready(function(){
	var colors = ['#4CAF50', '#F44336', '#607D8B',  '#009688', '#FFA000', '#795548', '#03A9F4', '#8BC34A', '#FF5722', '#536DFE', '#424242', '#CDDC39', '#673AB7'];
	var x = Math.floor((Math.random() * 13));
	$("#talltweets").css("background-color", colors[x]);
	});
	</script>
<script>
//	var colors = ['#4CAF50', '#F44336', '#607D8B',  '#009688', '#FFA000', '#795548', '#03A9F4', '#8BC34A', '#FF5722', '#536DFE', '#424242', '#CDDC39', '#673AB7'];
//  var x = Math.floor((Math.random() * 13));
	//document.getElementById("talltweets").setAttribute("style", "background-color:" + colors[x]);
	html2canvas(document.getElementById("talltweets"), {
    onrendered: function(canvas) {
    var screenshot = canvas.toDataURL("image/png");
    document.getElementById("textScreenshot").setAttribute("src", screenshot);
 
  });
  
</script>
<script>
  html2canvas(document.getElementById("talltweets"), {
    onrendered: function(canvas) {
      var screenshot = canvas.toDataURL("image/png");
      document.getElementById("textScreenshot").setAttribute("src", screenshot);
	  document.getElementById("talltweets").setAttribute("style", "display:none");
     //getBase64FromImageUrl(screenshot);
    }
  });
</script>