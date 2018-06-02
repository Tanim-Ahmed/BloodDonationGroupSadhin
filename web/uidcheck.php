<?php
$t=$_REQUEST["t"];
$conn=mysqli_connect("localhost","root","");
if(!$conn){
	die("Connection failed".mysqli_connect_error());
}
mysqli_select_db($conn,"Online_Registration");
$sql="SELECT * FROM users WHERE username = '".$t."'";
$result = mysqli_query($conn,$sql);
$row_num = mysqli_num_rows($result);
if($row_num>0){
	echo "Not Avaliable";
}
else{
	echo "Available";
}
mysqli_close($conn);
?>