<?php 
//Just test
$frh=fopen('value.txt','r');
$readed=fread($frh,filesize('value.txt'));
echo $readed;
fclose($frh);