<?php 
	
	session_start();
	$view = 'cook';
	if(isset($_COOKIE[$view])) {
		if(isset($_SESSION["views"])){
			
			$_SESSION["views"]++;
			setcookie($view, $_SESSION["views"] , time() + (10 * 365 * 24 * 60 * 60), "/");
		}
		else{
			
			$_SESSION["views"] = $_COOKIE[$view];
			$_SESSION["views"]++;
			setcookie($view, $_SESSION["views"] , time() + (10 * 365 * 24 * 60 * 60), "/");
		}
	}
	else{
		
		$_SESSION["views"]++;
		setcookie($view, $_SESSION["views"] , time() + (10 * 365 * 24 * 60 * 60), "/");
	}
	
	function getUserIP()
	{   
		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = $_SERVER['REMOTE_ADDR'];
	
	    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
        else
    {
        $ip = $remote;
    }
        return $ip;
	}
	
	echo "Hey there!<br>";
	
	$user_ip = getUserIP();
	echo 'Your ip address is : '.$user_ip . '.<br>';
	
	$views = (int)file_get_contents('view.txt');
	echo 'Your visited this page '.$_SESSION["views"].' number of time(s).<br>';
	$views += 1;
	echo 'Views count '.$views;
	file_put_contents('view.txt', $views);
	$txt = $user_ip . ' ' . $_SESSION["views"];
	$myfile = file_put_contents('newfile.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
	 
?>