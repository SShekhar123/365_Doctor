<?php

$msg = 'Healthy outside will start from inside';
$l = strlen($msg);

if($l>200){
echo "<img id='textScreenshot' style='height:750px; width:750px;' />  <center><div id='talltweets' style='height:750px; width:750px;'>". $msg ."</div></center>";
}

else if($l>150){
echo "<img id='textScreenshot'  style='height:600px; width:600px;' /> <center><div id='talltweets' style='height:600px; width:600px;'>". $msg ."</div></center>";
}

else if($l>100){
echo "<img id='textScreenshot' style='height:500px; width:600px;'/> <center><div id='talltweets' style='height:500px; width:600px;'>". $msg ."</div></center>";
}
else if($l<50){
echo "<img id='textScreenshot'  style='height:400px; width:600px;'/> <center><div id='talltweets' style='height:400px; width:600px;'>". $msg ."</div></center>";
}
else{
echo "<img id='textScreenshot'  style='height:300px; width:600px;'/> <center><div id='talltweets' style='height:300px; width:600px;'>". $msg ."</div></center>";
}
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<!-- Include the HTMl2Canvas library -->
<script src="html2canvas.js"></script>
<style>
#textScreenshot, #talltweets {
font-weight: bold;
font-size:50px;
font-family:Calibri;
border-style: dotted;
line-height: 100px; padding-top:50px; color:#ffffff; background-color:#1aff00;}
</style>
<script>
  html2canvas(document.getElementById("talltweets"), {
    onrendered: function(canvas) {
      var screenshot = canvas.toDataURL("image/png");
      document.getElementById("textScreenshot").setAttribute("src", screenshot);
    }
  });
</script>