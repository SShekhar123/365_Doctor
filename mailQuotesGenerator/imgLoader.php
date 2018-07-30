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
  $var = "<center><img id='textScreenshot' style='height:750px; width:750px;' /></center> <br> <center><div id='talltweets' style='height:750px; width:750px;'>". $msg ."</div></center>";
  }

 else if($l>100){
  $var =  "<center><img id='textScreenshot'  style='height:600px; width:600px;' /></center><br> <center><div id='talltweets' style='height:600px; width:600px;'>". $msg ."</div></center>";
  }

 else if($l>=60){
  $var =  "<center><img id='textScreenshot' style='height:500px; width:600px;'/></center><br> <center><div id='talltweets' style='height:500px; width:600px;'>". $msg ."</div></center>";
  }
 else if($l>50){
  $var =  "<center><img id='textScreenshot'  style='height:400px; width:600px;'/></center><br> <center><div id='talltweets' style='height:400px; width:600px;'>". $msg ."</div></center>";
  }
 else{
  $var =  " <center><img id='textScreenshot'  style='height:300px; width:600px;'/></center><br> <center><div id='talltweets' style='height:300px; width:600px;'>". $msg ."</div></center>";
  }
echo $var;

//$link= $var;
  //  $destdir = 'img-quotes/';
    //$img=file_get_contents($link);
    //file_put_contents($destdir.substr($link, strrpos($link,'/')), $img); 
?>

<div id="res"></div>
<script src="html2canvas.js"></script>
<script src="query.js"></script>
<style>
#talltweets {
font-weight: bold;
font-size:40px;
font-family:Calibri;
line-height: 100px; padding-top:50px; color:#ffffff;
position: relative;
float: left;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
}
</style>
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
 <script src="download.js"></script>
    <script type="text/javascript">
    $("document").ready(function(){
	var colors = ['#4CAF50', '#F44336', '#607D8B',  '#009688', '#FFA000', '#795548', '#03A9F4', '#8BC34A', '#FF5722', '#536DFE', '#424242', '#CDDC39', '#673AB7'];
	var x = Math.floor((Math.random() * 13));
	$("#talltweets").css("background-color", colors[x]);
	});
	</script>

<script>
  html2canvas(document.getElementById("talltweets"), {
    onrendered: function(canvas) {
      var screenshot = canvas.toDataURL("image/png");
      document.getElementById("textScreenshot").setAttribute("src", screenshot);
	  document.getElementById("talltweets").setAttribute("style", "display:none");
	  download($('#textScreenshot').attr('src'),"bharat.png","image/png");
	  
    }
  });
</script>