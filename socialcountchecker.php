<?php


   $input = "http://apple.com";
	
	$url = "https://count.donreach.com/?url=".$input."&providers=all";

		$USER_AGENT = $_SERVER['HTTP_USER_AGENT'];

			$ch=curl_init();
			
			curl_setopt($ch, CURLOPT_TIMEOUT, 60);
			
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
			
			curl_setopt($ch, CURLOPT_USERAGENT, $USER_AGENT);
			
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			
			curl_setopt($ch, CURLOPT_URL, $url);
			
			$result = curl_exec($ch);
						
			curl_close($ch);

			$fresult = json_decode($result);	
			
		echo '<pre>';	
		print_r($fresult);
		
	die;
	
	

?>