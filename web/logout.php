<?php 
require 'core.inc.php';
session_destroy();

setcookie('user_name','',time()-60,"/");

header('Location: '.$http_referer);
?>