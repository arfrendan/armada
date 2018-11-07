<?php
 if(!isset($_POST['submit'])){
        exit("error");
    }
	$loginID=$_POST['loginID'];
	$password=$_POST['password'];
	
	 include('connect.php');
	 $sql="select * from user where loginID = '$loginID' and password='$password'";
	 $result = mysqli_query($con,$sql);
	 $row = mysqli_num_rows($result);
	 if($row){
	 	echo 'succes';
	 	header("refresh:0;url=index.php");
	 	exit;
	 }else{
	 	echo 'le loginID et le mot de cle sont erreurs';
	 	echo "
                    <script>
                            setTimeout(function(){window.location.href='loginPage.php';},1000);
                    </script>

                ";
	 }
	 mysqli_close($con);
?>