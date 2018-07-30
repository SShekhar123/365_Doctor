<?php
//$file = 'newfile.txt';
$homepage = file_get_contents('newfile.txt');
$var = $homepage;
echo $homepage;
?>


	
	if(isset($_COOKIE[$view])) {
		/*if(isset($_SESSION["views"])){
			$_SESSION["views"]++;
			setcookie($view, $_SESSION["views"] , time() + (10 * 365 * 24 * 60 * 60), "/");
		}
		else{	
			$_SESSION["views"] = $_COOKIE[$view];
			$_SESSION["views"]++;
			setcookie($view, $_SESSION["views"] , time() + (10 * 365 * 24 * 60 * 60), "/");
		}*/
		$var = file_get_contents('newfile.txt');
		echo $var;
	}
	else{
		$views = (int)file_get_contents('view.txt');
		$views += 1;
			//$_SESSION["views"]++;
		file_put_contents('view.txt', $views);
		setcookie($view, 'the set session' , time() + (10 * 365 * 24 * 60 * 60), "/");
		$txt = $bid .' : ' . $user_ip . ' : ' . $views . '\n';
		$myfile = file_put_contents('newfile.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
	}