
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sadhin</title>
		<link rel="stylesheet" type="text/css" href="resources/styles.css">
		<style>
			.col-2{
				display:inline-block;
			}
			.parts{
				float:left;
				width:22%;
				padding:15px 20px;
				margin:10px 17px;
				border-top:2px solid black;
				border-bottom:2px solid black;
				height:275px;
				border-radius:6px;
			}
			.button{
				background-color:#EFC050;
				color:white;
				text-align:center;
				width:190px;
				height:40px;
				border-radius:6px;
				padding:10px;
				align:center;
				margin:50px 20px;
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
			.parts p{
				text-align:center;
				font-weight:bold;
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
			<h1 style="margin-bottom:0px;"><a href="http://www.kuet.ac.bd/departments/index.php/welcome/index/41" target="_blank">Blood Donars Group Sadhin</a></h1>
			<h3><a href="http://www.kuet.ac.bd/" target="_blank">Donate Blood &amp; Save Life</a></h3>
			
		</div>
		<div class="row">
			
			<div class="col-1">
			</div>

			<div class="col-2">
				<br>
				<!-- <h3 style="display:inline-block;">Welcome  / <?php //echo $_SESSION['$fullname']; ?></h3> -->
				<?php
					
					$_SESSION['user_name']=$_COOKIE['user_name'];
					$query = "SELECT fullname FROM students WHERE username='".$_SESSION['user_name']."'";
					$result=mysqli_query($conn,$query);
					while($row=mysqli_fetch_array($result))
					{
						$a=$row['fullname'];
					}
	
				?>
				
				<h3 style="display:inline-block;"><p>Welcome<p> </h3>
				<div class="button" id="out">
					<a href="logout.php"><strong>Log Out</strong></a>
				</div>
				<br><br>
				
				<div class="parts">
					<p>Be a complete Donars?</p>
					<div class="button">
						<a href="details.php"><strong>Donars Details </strong></a>
					</div>
					<p> - Fill out the various details Information </p>
				</div>
				

				<div class="parts">
					<p>Need blood?</p>
					<div class="button">
						<a href="coursereg.php"><strong>Reqeust Blood?</strong></a>
					</div>
					<p> -Fill receiver's information </p>
				
				</div>
				
				
					
			</div>

			<div class="col-1">
			</div>

		</div>
			
		<br>
		<div class="footer">
			<p>Copyright &copy;Tanim Ahmed </p>
		</div>

	</body>
	
</html>