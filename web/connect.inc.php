
<?php 
$dbhost = 'localhost';
$user ='root';
$pass ='';
$db = 'Online_Registration'; // databasename
$conn=mysqli_connect("$dbhost","$user","$pass");
$create_database = "create database $db";
$result = mysqli_query($conn,$create_database);

$conn=mysqli_connect("$dbhost","$user","$pass","$db");

$query = "CREATE TABLE `courses` (
  `code` varchar(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `credit` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$x = mysqli_query($conn,$query);

if($x){

mysqli_query($conn,$query);
}


$query = "CREATE TABLE `course_registered` (
  `username` varchar(10) NOT NULL,
  `core1` varchar(30) NOT NULL,
  `core2` varchar(30) NOT NULL,
  `core3` varchar(30) NOT NULL,
  `core4` varchar(30) NOT NULL,
  `core5` varchar(30) NOT NULL,
  `opt1` varchar(30) NOT NULL,
  `opt2` varchar(30) NOT NULL,
  `opt3` varchar(30) NOT NULL,
  `total_credit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$x = mysqli_query($conn,$query);

if($x){

mysqli_query($conn,$query);
}



$query = "CREATE TABLE `students` (
  `username` varchar(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hall` varchar(30) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `category` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `gpa` varchar(140) NOT NULL,
  `cgpa` varchar(140) NOT NULL,
  `challan_no` varchar(150) NOT NULL,
  `challan_date` varchar(150) NOT NULL,
  `amount` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$x = mysqli_query($conn,$query);

if($x){


mysqli_query($conn,$query);
}

$query =  "CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;";

$x = mysqli_query($conn,$query);

if($x){

mysqli_query($conn,$query);

}


?>﻿