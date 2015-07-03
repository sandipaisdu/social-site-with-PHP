<?php
$con = mysqli_connect("localhost","root","","social_network") or die("Connection was not established");


//function for inserting user
function InsertUser(){
  
  if(isset($_POST['sign_up'])){
     global $con;
     $fname   =   mysqli_real_escape_string($con,$_POST['name']);
     $email   =   mysqli_real_escape_string($con,$_POST['email']);
     $pass    =   mysqli_real_escape_string($con,$_POST['pass']);
     $country =   mysqli_real_escape_string($con,$_POST['country']);
     $sex     =   mysqli_real_escape_string($con,$_POST['sex']);
     $dob     =   mysqli_real_escape_string($con,$_POST['dob']);
     $date    =   date("d-m-y");
     $status  =   "unverified";
     $posts   =   "No";




     $get_email = "select * from users where user_email = '$email'";
     $run_email = mysqli_query($con, $get_email);
     $check     = mysqli_num_rows($run_email);

     if($check==1){
     	echo"<h4 style='color:red; text-align:center;'>The email you have entered has been already registered</h>";
     	//echo"<script>alert('The email you have entered has been already registered');</script>";
     	exit;
     }


     if(strlen($pass)<8){
     	echo"<h4 style='color:red; text-align:center;'>Please enter a password atleast of 8 characters.</h>";
     	exit();
     }

     else{
     	$insert = "insert into users (
     		user_name, 
     		user_pass, 
     		user_email,
     		user_country,
     		user_gender,
     		user_b_day,
     		user_image,
     		register_date,
     		last_login,
     		status,
     		posts
     		)
     		 values (
     		 	'$fname',
     		 	'$pass',
     		 	'$email',
     		 	'$country',
     		 	'$sex',
     		 	'$dob',
     		 	'default.jpg',
     		 	'$date',
     		 	'$date',
     		 	'$status',
     		 	'$posts'
     		 	)";

     	$run_insert = mysqli_query($con, $insert);

     	if($run_insert){
     		echo"<h4 style='color:green; text-align:center;'>Registration Successfull.</h>";
     		echo"<script>window.open('home.php','_self')</script>";
     	}
     }
  }

}




?>