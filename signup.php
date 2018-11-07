<?php
	 if(!isset($_POST['submit'])){
        exit("error");
    }
	$loginID=$_POST['loginID'];
	$password=$_POST['password'];
	
	 include('connect.php');
	 $sql="insert into user(id,loginID,password) values (null,'$loginID','$password')";
	 $result = mysqli_query($con,$sql);
	 
	 if(!$result){
	 	die('error'.mysqli_error($con));
	 }
	 
	 mysqli_close($con);
?>