<?php 
include_once("sender.php"); 
$url ='http://payline.ir/payment/gateway-result-second'; 
$api = 'Your-API'; 
$trans_id = $_POST['trans_id']; 
$id_get = $_POST['id_get']; 
$result =get($url,$api,$trans_id,$id_get); 
?> 