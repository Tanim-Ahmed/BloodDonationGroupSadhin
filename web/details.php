<?php
   include 'connect.inc.php';
?>

<?php
require 'core.inc.php';
$fullname = getuserfield('fullname');
$username = getuserfield('username');

//if(isset($_POST['hall'])&&isset($_POST['dob'])&&isset($_POST['email'])&&isset($_POST['gender'])&&isset($_POST['category'])&&isset($_POST['contact']))
	if(isset($_POST['hall'])||isset($_POST['dob'])||isset($_POST['email'])||isset($_POST['gender'])||isset($_POST['category'])||isset($_POST['contact']))
{
	$hall = trim($_POST['hall']);
	
	$dob = trim($_POST['dob']);
	$email = trim($_POST['email']);
	$contact = trim($_POST['contact']);
	$gender = trim($_POST['gender']);
	
	$category = trim($_POST['category']);
	//if(!empty($hall)&&!empty($dob)&&!empty($email)&&!empty($contact)&&!empty($gender)&&!empty($category))
	if(!empty($hall)||!empty($dob)||!empty($email)||!empty($contact)||!empty($gender)||!empty($category))
	{
		
		$query = "UPDATE students SET hall = '".mysqli_real_escape_string($conn, $hall)."', 
		
		DOB = '".mysqli_real_escape_string($conn, $dob)."', 
		email = '".mysqli_real_escape_string($conn, $email)."', 
		contact = '".mysqli_real_escape_string($conn, $contact)."',
		gender = '".mysqli_real_escape_string($conn, $gender)."', 
		
		category = '".mysqli_real_escape_string($conn, $category)."'
		WHERE username='".mysqli_real_escape_string($conn, $username)."' ";

		$query_run = mysqli_query($conn, $query);

		if($query_run = mysqli_query($conn, $query))
		{?>
			<script>
				alert('Details Entered Succesfully...Click OK');
				window.history.go(-2);
			</script>
		<?php
		}
		else
		{
			$error = 'Something went wrong. Try again later.';
		}		
	}
	else
	{
		$error = 'All fields are required.';
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
			#left{
				display:inline-block;
				width:45%;
				margin:10px 10px 10px 30px;
				padding:10px 50px 10px 50px;
			}
			#right{
				float:right;
				width:45%;
				margin:10px 30px 10px 10px;
				padding:10px 10px 10px 90px;
			}
			input[type=text]{
				width: 90%;
				padding: 10px 15px;
				margin: 8px 0;
				border:none;
				height:35px;
				border-radius:6px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
			}
			input[type=submit]{
				background-color: #EFC050;
				border-radius: 8px;
				color: white;
				padding: 8px 32px;
				text-decoration: none;
				margin: 4px 530px;
				cursor: pointer;
				font-size:16px;
				font-weight:bold;
				height:40px;
			}
			input[type=submit]:hover{
				background-color: white;
				color: #EFC050;
			}
			
			.button{
				background-color:#EFC050;
				color:white;
				text-align:center;
				width:200px;
				height:40px;
				border-radius:6px;
				padding:10px;
				align:center;
				margin:60px 50px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.7);
			}
			.button a{
				text-decoration:none;
				color:inherit;
			}
			.button:hover{
				background-color:white;
				color:#EFC050;
				cursor:pointer;
			}
			#out{
				display:inline;
				right:0;
			}
		</style>
	</head>
	
	<body>

		<div class="header">
			<img src="resources/logo2.png" alt="logo">
			<h1 style="margin-bottom:0px;"><a href="http://www.kuet.ac.bd/departments/index.php/welcome/index/41" target="_blank">Blood Donation Group Sadhin</a></h1>
			<h3><a href="http://www.kuet.ac.bd/" target="_blank">Donate Blood &amp; Save Life</a></h3>
		</div>

		<div class="row">
			
			<div class="col-1">
			</div>

			<div class="col-2">
				<br>
				<h3 style="display:inline-block;"><p>Welcome<p> <?php echo $fullname ?></h3>
			
				<h3>Fill out the Following Details</h3>
				<form action="details.php" id="form3" method="POST">
					<div id="left">
						Blood Group<br>
						<input type="text" name="hall"><br><br>
						Date Of Birth(yy-mm-dd)<br>
						<input type="text" name="dob"><br><br>
						E-mail Id<br>
						<input type="text" name="email"><br><br>
						
					</div>
					
					<div id="right">
						Gender<br>
						<input type="text" name="gender"><br><br>
						Contact Number<br>
						<input type="text" name="category"><br><br>
						Facebook Id<br>
						<input type="text" name="contact"><br><br>
						
					</div>
					<input type="submit" value="Submit">
				</form>
				<p><strong><?php echo ((isset($error) && $error != '') ? $error : ''); ?></strong></p>
				
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
