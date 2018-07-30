<!DOCTYPE html>
 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Captcha code</title>
 <style>
 *{padding:0px; margin:0px;}
 .captcha{font-family: Arial, Helvetica, sans-serif;  width:300px; height:150px; line-height:60px; text-align:center;}
 p{font-size:40px; color:rgba(36,32,31,.7); position:absolute; top:50px; left:80px; background-color: ;}
 </style>
 </head>
<body>
<div class="captcha">
 <p>
 <?php
 $a = md5(mktime());
 echo $a;
 ?>
 </p>
 </div>
</body>
 </html>