<?php 
$dbhost = 'localhost';
$user ='root';
$pass ='';
$db ='online_registraion';
$conn=mysqli_connect("$dbhost","$user","$pass","$db");

?>﻿






CREATE TABLE `courses` (
  `code` varchar(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `credit` int(2) NOT NULL
);

/*

INSERT INTO `courses` (`code`, `cname`, `type`, `credit`) VALUES
('CO306', 'Embedded Systems', 'C', 4),
('CO307', 'Software Engineering', 'C', 4),
('CO308', 'Compiler Design', 'C', 4),
('BM322', 'Ethics in Engineering', 'C', 3),
('CS621', 'Mobile Computing', 'E', 4),
('CO423', 'Web Technology', 'E', 4),
('CO421', 'Graph Theory', 'E', 3);

*/

CREATE TABLE `course_registered` (
  `username` varchar(10) NOT NULL,
  `core1` varchar(10) NOT NULL,
  `core2` varchar(10) NOT NULL,
  `core3` varchar(10) NOT NULL,
  `core4` varchar(10) NOT NULL,
  `opt1` varchar(10) NOT NULL,
  `opt2` varchar(10) NOT NULL,
  `opt3` varchar(10) NOT NULL,
  `total_credit` int(5) NOT NULL
) ;


/*
INSERT INTO `course_registered` (`username`, `core1`, `core2`, `core3`, `core4`, `opt1`, `opt2`, `opt3`, `total_credit`) VALUES
('csb14001', 'CO306', 'CO307', 'CO308', 'BM322', 'CS621', 'CO423', 'Not taken', 23),
('ELB14045', 'CO306', 'CO307', 'CO308', 'BM322', 'CS621', 'Not taken', 'CO421', 22),
('ELB14029', 'CO306', 'CO307', 'CO308', 'BM322', 'CS621', 'CO423', 'Not taken', 23),
('MEB14001', 'CO306', 'CO307', 'CO308', 'BM322', 'CS621', 'CO423', 'Not taken', 23);
*/



CREATE TABLE `students` (
  `username` varchar(10) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hall` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `category` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gpa` float NOT NULL,
  `cgpa` float NOT NULL,
  `challan_no` varchar(15) NOT NULL,
  `challan_date` date NOT NULL,
  `amount` varchar(10) NOT NULL
) ;
/*

INSERT INTO `students` (`username`, `fullname`, `sex`, `hostel`, `DOB`, `category`, `email`, `contact`, `sgpa`, `cgpa`, `challan_no`, `challan_date`, `amount`) VALUES
('CSB14051', 'Shubham Kumar', 'Male', 'Patkai Men''s Hostel', '1995-11-19', 'General', 'mail2shubhampandey@gmail.com', '8011539909', 8, 8.54, '32165498', '2017-01-12', '23903'),
('csb14002', 'vara Prasad', 'm', 'nmh', '1996-11-04', 'gen', 'varap@gmail', '7963214580', 7.77, 7.9, '', '0000-00-00', ''),
('csb14003', 'sahachar', '', '', '0000-00-00', '', '', '0', 0, 0, '', '0000-00-00', ''),
('csb14049', 'alok', '', '', '0000-00-00', '', '', '0', 0, 0, '', '0000-00-00', ''),
('csb14001', 'Poplu', 'male', 'ghar', '2014-11-18', 'general', 'poplu@shubham.com', '7765857339', 9, 9, '32165498', '2017-01-12', '23903'),
('ELB14045', 'Pintu Kumar', 'MALE', 'Patkai Men''s Hostel', '1995-06-05', 'GENERAL', 'pintu3059@gmail.com', '8723066568', 6, 6.5, '4587964', '2017-05-14', '24003'),
('MEB14001', 'Ram', 'male', 'nmh', '1996-11-04', 'sc', 'ram@gmail.com', '7894561230', 7, 7, '365412987', '2017-05-14', '23933');

*/

CREATE TABLE `users` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ;

/*

INSERT INTO `users` (`username`, `password`) VALUES
('CSB14017', '32250170a0dca92d53ec9624f336ca24'),
('CSB14052', '96b9c62c86f35c209c5b8c302ba34175'),
('CSB14056', '895759ab3e0fccd84cb08e2ff58b725b'),
('CSB14051', '3b6beb51e76816e632a40d440eab0097'),
('csb14002', '567a089b877eb76464d3f6052edcdcd2'),
('csb14003', '4eae18cf9e54a0f62b44176d074cbe2f'),
('csb14049', '76d80224611fc919a5d54f0ff9fba446'),
('csb14000', '37d1703157da260a648d24613032bc8f'),
('csb14001', '1a8643d46257909603284f27cbbd150d'),
('ELB14045', 'f18ee610e34286e4a045cdaac3458f90'),
('ELB14029', '4af5cab77c62eaec5f87b570f2d2b127'),
('MEB14001', '4641999a7679fcaef2df0e26d11e3c72');
*/