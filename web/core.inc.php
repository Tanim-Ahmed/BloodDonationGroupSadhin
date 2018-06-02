<?php
   include 'connect.inc.php';
?>
<?php
ob_start();
session_start(); 
$current_file = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
{
	$http_referer = $_SERVER['HTTP_REFERER'];
}
function loggedin()
{
	if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getuserfield($field)
{
	global $conn;
	$query = "SELECT ".$field." FROM students WHERE username='".$_SESSION['user_name']."'";
	if($query_run = mysqli_query($conn, $query))
	{
		$query_run = mysqli_query($conn, $query);
		$query_row = mysqli_fetch_assoc($query_run);
		$return_field = $query_row[$field];
		return $return_field;
		
	}	
}
?>