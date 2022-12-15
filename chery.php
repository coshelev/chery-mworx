<?php
$rest_json = file_get_contents("php://input");
file_put_contents ("koshelev.txt", $rest_json, FILE_APPEND);

$_POST = json_decode($rest_json, true);
file_put_contents ("koshelev.txt", $_POST, FILE_APPEND);

$message = print_r($_POST,true);
file_put_contents ("koshelev.txt", $message, FILE_APPEND);

$data = '<?xml version="1.0" encoding="UTF-8" standalone="yes"?> <request> <phone>'.$_POST["phone"].'</phone>  <site>online.chery-luidor.ru</site> <extra>'.$message.'</extra> </request>';
file_put_contents ("koshelev.txt", $data, FILE_APPEND);

//$url = 'http://mainappl.main.luidorauto.ru/sys_agr/hs/webhooks/callback/v1';
//$ch = curl_init();
//curl_setopt($ch,CURLOPT_URL, 	    $url);
//curl_setopt($ch,CURLOPT_POST, 	    true);
//curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
//$result = curl_exec($ch);
?>