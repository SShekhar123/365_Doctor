<?php 
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
	function setCounterCookie($article)
	{	$view = $article;
		if(isset($_COOKIE[$view])) 
		{
			echo 'You are visiting the page more than once.';
		}
		else
		{	
			if( in_array($article ,$counter) )
			{
			 $counter[$article]=0;
			}
			$counter[$article]+=1;
			$vl = $counter[$article];
			$views = (int)file_get_contents('view.txt');
			$views += 1;
			file_put_contents('view.txt', $views);
			//setcookie($view, $view , time() + (10 * 365 * 24 * 60 * 60), "/");
			$user_ip = getUserIP();
			$txt = $view .' : ' . $user_ip . ' : ' . $vl . ' : ' . $views;
			$myfile = file_put_contents('newfile.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
			echo 'visit 1';
		}
	}
	function showLogData()
	{
		$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
		while(!feof($myfile)) 
		{
			echo fgets($myfile) . "<br>";
		}
		fclose($myfile);
	}
	function showLogReport($blogid){
		$fid = ''; $count = 0;
		$handle = fopen("newfile.txt", "r");
		if ($handle) {
		while ($line = fgets($handle)) {
			if (strpos($line, $blogid) !== false) {
			echo $line . '<br>';
			$count++;
			}
		}	fclose($handle);
			echo '<br>No. of views = ' . $count;
			if($count == 0){
				echo '<br><br> No Records Found.';
			}
		} 		
			else 
		{
			echo 'Record file not found!';
		}	
		$count = 0;
	}
?>