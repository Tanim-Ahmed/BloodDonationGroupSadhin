<?php 
require 'core.inc.php';
require 'connect.inc.php';

if(isset($_COOKIE['user_name'])&&!empty($_COOKIE['user_name']))
{
	//$fullname = getuserfield('fullname');
	
	
	include 'first.php';
}
else
{
	include 'loginform.inc.php';
}	

?>