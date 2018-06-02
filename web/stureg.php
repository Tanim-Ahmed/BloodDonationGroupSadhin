<?php
   include 'connect.inc.php';
?>
<?php 
require 'core.inc.php';
$message="Already Registered ?";
if(!loggedin())
{
	if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_confirm'])&&isset($_POST['fullname']))
	{
		$username = trim($_POST['username']);
		
		$password = trim($_POST['password']);
		$password_again = trim($_POST['password_confirm']);
		
		$fullname = trim($_POST['fullname']);
		if(!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($fullname))
		{
			if(strlen($username)>10||strlen($fullname)>30)
			{
				$error = 'Please adhere to maxlength of fields.';
			}
			else
			{
				if($password!=$password_again)
				{
					$error = 'Passwords do not match.';
				}
				else
				{
					$password_hash = md5($password);
					$username = mysqli_real_escape_string($conn, $username);
					$query = "SELECT username FROM users WHERE username='$username'";
					$query_run = mysqli_query($conn, $query);
					if($query_run)
					{
						echo "successfull";
					}
					$query_num_rows = mysqli_num_rows($query_run);
					if($query_num_rows>=1)
					{
						$error = 'The username '.$username.' already exists.';
					}
					else
					{
						$query1 = "INSERT INTO users VALUES ('".mysqli_real_escape_string($conn, $username)."','".mysqli_real_escape_string($conn, $password_hash)."')";
						$query2 = "INSERT INTO students VALUES ('".mysqli_real_escape_string($conn, $username)."','".mysqli_real_escape_string($conn, $fullname)."','','','','','','','','','','','')";
						$query3 = "INSERT INTO course_registered VALUES ('".mysqli_real_escape_string($conn, $username)."','','','','','','','','','')";

						if($query_run1 = mysqli_query($conn, $query1) && $query_run2 = mysqli_query($conn, $query2) && $query_run3 = mysqli_query($conn, $query3))
						{
							$message="You have been Registered ".$fullname;
						}
						else
						{
							$error = 'Sorry, we couldn\'t register you at this time. Try again later.';
						}
					}
				}
			}  
		}
		else
		{
			$error = 'All fields are required.';
		}
	}
}
?>

<!DOCTYPE html>
<html>
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sadhin</title>
		<link rel="stylesheet" type="text/css" href="resources/styles.css">

			<script>
function func(str){
    if (str.length==0) {
        document.getElementById("uidId").innerHTML="";
        return;
    } else {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
            if (this.readyState == 4 && this.status==200){
                document.getElementById("uidId").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET","uidcheck.php?t="+str,true);
        xmlhttp.send();
    }
}
</script>







		<style>


			.register {
				width:50%;
				color:#000000;
				float:right;
				margin:10px 20px 0px 20px;
				padding:0px 0px 5px 30px;
			}
			.notice {
				display:inline-block;
			}
			.notice a{
				text-decoration:none;
				color:blue;
			}
			input[type=text] ,input[type=password]{
				width: 80%;
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
		</style>
	</head>
	
	<body>

		<div class="header">
			<img src="resources/logo2.png" alt="logo">
			<h1 style="margin-bottom:0px;"><a href="http://www.kuet.ac.bd/departments/index.php/welcome/index/41" target="_blank">Blood Donars Group Sadhin</a></h1>
			<h3><a href="http://www.kuet.ac.bd//" target="_blank">Donate Blood &amp; Save Life</a></h3>
		</div>

		<div class="row">
			
			<div class="col-1">
			</div>

			<div class="col-2">
			
				<br>
				
				<div class="notice">
					
					<br>
					<p><strong><?php echo ((isset($message) && $message != '') ? $message : ''); ?></strong></p>
					<p>Click here to <a href="index.php"><strong>Log in</strong></a></p>					
				</div>
				
				<div class="register">
					<form action="stureg.php" id="form2" method="POST">
					  Full Name<br>
					  <input type="text" name="fullname"><br><br>
					  User Name<br>
					  <input type="text" name="username" onkeyup="func(this.value)" placeholder="Enter User Name">
				<p style="font-size: 12px;color: red;">Avaliability: <span id="uidId"></span></p>


					  Password<br>
					  <input type="password" name="password"><br><br>
					  Re-enter Your Password<br>
					  <input type="password" name="password_confirm"><br><br>
					  <input type="submit" value="Register">
				   </form>
				   <br><?php echo ((isset($Error) && $Error != '') ? $Error : ''); ?>
				</div>
					
			</div>

			<div class="col-1">
			</div>

		</div>
			
		<br>
		<div class="footer">
			<p>Copyright &copy; Tanim Ahmed</p>
		</div>

	</body>
	
</html>