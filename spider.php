<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CAPTCHA</title>
</head>
<body>
	<?php
	echo "hehe<br/>";
	
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	$param = "666";
	$url = "https://www.google.com/s?wd=生命动力";
 
$header = array (
        'User-Agent: Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.146 Safari/537.36'
);
$ch = curl_init ();
curl_setopt ( $ch, CURLOPT_URL, $url );
curl_setopt ( $ch, CURLOPT_HTTPHEADER, $header );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
// 执行
$content = curl_exec ( $ch );
if ($content == FALSE) {
    echo "error:" . curl_error ( $ch );
}
// 关闭
curl_close ( $ch );

	/*$regex = '/<img.*?src\=\"(.*?\.(jpg|bmp|png|jpeg)).*?>/'；*/
	//$matches = array();
	
	//try{
		//preg_match_all($regex, $content, $matches
	}
	//catch (Exception $e){
	//	print $e->getMessage();
	}
	//if(preg_match_all($regex, $content, $matches)){
	//	foreach($matches as $jpg){
	//		echo "<pre/>";
	//		print_r($jpg);
	//		echo "<pre/>"
	//	}
	}

	?>
</body>
</html>