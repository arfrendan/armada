<?php
 	 if(!isset($_POST['submit'])){
        exit("error");
    }
    $loginID=$_POST['loginID'];
	$password=$_POST['password'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$sexe = $_POST['sexe'];
	$email = $_POST['email'];
	$verifier = $_POST['verifier'];
	
	if(!$nom||!$prenom){
			echo 'saisir le nom et le prenom!! \n';
	 		echo " <script>
                        setTimeout(function(){window.location.href='sinscrirePage.php';},3000);
                   </script>";
		}
	if($verifier){
	echo $verifier;	
		
	include('connect.php');
	$sql="insert into utilisateur(id,loginID,password,sexe,nom,prenom,email) values (null,'$loginID','$password','$sexe','$nom','$prenom','$email')";
	$result = mysqli_query($con,$sql);
	if(!$result){
	 	die('error'.mysqli_error($con));
	}else{
		echo 'succes';
	 	header("refresh:0;url=index.php");
	}
	
	
	}else{
		echo 'appuyer sur le verifier';
	}
	
	
	mysqli_close($con);
	
?>