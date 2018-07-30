<?php 

	echo '365Doctors App<br><br><br>';
    require_once('counter.php');
	echo 'Cookie status <br><br><br>';
	setCounterCookie('blog12');
	echo '<br><br><br> Log Contents :<br><br>';
	showLogData();
	echo '<br><br><br> Blog results for blog6:<br><br>';
	showLogReport('blog12');
?>