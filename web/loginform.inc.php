<?php
   include 'connect.inc.php';
?>

<?php 
if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = mysqli_real_escape_string($conn,$username);
	$password = mysqli_real_escape_string($conn,$password);
	
	if(!empty($username) && !empty($password))
	{
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		if($query_run = mysqli_query($conn, $query))
		{
			
			$query_num_rows = mysqli_num_rows($query_run);
			if($query_num_rows==0)
			{
				$Error =  'Invalid username/password.';
				echo $Error;
			}
			else if($query_num_rows>0)
			{
				$query_row = mysqli_fetch_assoc($query_run);
				$user_name = $query_row['username'];
				$_SESSION['user_name'] = $user_name;
				setcookie("user_name",$user_name,time()+60,"/");
				$query = "SELECT fullname FROM students WHERE username='$username'";
				$query_run = mysqli_query($conn, $query);
				$query_row = mysqli_fetch_assoc($query_run);
				$_SESSION['fullname'] = $query_row['fullname'];
				header('Location:index.php');
			}
		}
	}
	else
	{
		$Error = "You must enter a username or password";
	}
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sadhin</title>
		<link rel="stylesheet" type="text/css" href="resources/styles.css">
		<style>
			input[type=text] ,input[type=password]{
				width: 100%;
				padding: 10px 15px;
				margin: 8px 0;
				border:none;
				height:35px;
				border-radius: 6px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
			}
			input[type=submit]{
				background-color: #EFC050;
				border-radius: 8px;
				color: white;
				padding: 8px 32px;
				text-decoration: none;
				margin: 4px 0px;
				cursor: pointer;
				width:35%;
				font-size:16px;
				font-weight:bold;
				height:40px;
			}
			input[type=submit]:hover{
				background-color: white;
				color: #EFC050;
			}
			.gallery {
				color:#000000;
				height:350px;
				width:58%;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
				display:inline-block;
				margin:0px 10px 0px 0px;
			}

			.start {
				color:#000000;
				height:350px;
				width:35%;
				float:right;
				margin:10px 20px 0px 20px;
				padding:30px 0px 5px 30px;
			}
			.start a{
				text-decoration:none;
				color:blue;
			}
			.start p{
				float:right;
				left:0;
			}
			#form{
				display:inline;
			}
		</style>
	</head>
	
	<body>

		<div class="header">
			<img src="resources/logo2.png" alt="logo">
			<h1 style="margin-bottom:0px;"><a href="http://www.kuet.ac.bd/departments/index.php/welcome/index/41" target="_blank">Blood Donars Group Sadhin</a></h1>
			<h3><a href="http://www.kuet.ac.bd/" target="_blank">Donate Blood &amp;Save Life</a></h3>
		</div>

		<div class="row">
			
			<div class="col-1">
			</div>

			<div class="col-2">
			
				<br>
				
				<div class="gallery">
				  <img src="resources/cse.jpg" style="width:100%;height:350px">
				</div>
				
				<div class="start">
				  <form action="" method="POST" id="form">
					  User name<br>
					  <input type="text" name="username"><br><br>
					  
					  Password<br>
					  <input type="password" name="password"><br><br>
					  
					  <input type="submit" value="Login">
				   </form>
				   <p>New users <a href="stureg.php">Click Here</a></p><br>
				   
				   	<br><?php echo ((isset($Error) && $Error != '') ? $Error : ''); ?>
				   
				   
				</div>
					
			</div>

			<div class="col-1">
			</div>

		</div>
			
		<br>
		<div class="footer">
			<p>Copyright &copy;Tanim Ahmed</p>
		</div>

	</body>
	
</html>
