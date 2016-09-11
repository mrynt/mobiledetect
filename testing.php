<?php

require_once('detect.php');

$detect = new Detect;
$mobile = $detect->mobile();

if(!$mobile){
	echo 'browser';
}else{
	echo 'mobile';
}

?>