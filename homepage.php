<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>用户列表</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
		  .navi{
		  background: url(img/armadaFirst.png);
		  }
	  	</style>
	</head>
	
	<body>
		
		<div class="container">
		    <div class="row navi">
			  	<table width="100%">
			  		<tbody>
			  			<tr height="50px"> 
			  				<td align="left">
			  					<a href="HomePage.html">
			  						<img src="img/logo.png" />
			  					</a>
			  				</td>
			  				
			  			</tr>
			  		</tbody>
			  	</table>
		    </div>
		    
			<div align="center">
	  			<h1>WELCOME to Armada</h1>
	  		</div>
			
			<div class="table">
				<table class="table">
				<thead>
	  			<th>nom</th>
	  			<th>annee</th>
	  			<th>pays</th>
	  			<th>image</th>
	  			</thead>
	  			
	  			<tbody>
				<?php
						 include('connect.php');
						 $sql="select nom,pays,annee,path from bateau";
						 $result = mysqli_query($con,$sql);
						 $rows = mysqli_num_rows($result);
						 
						 if ($result && $rows) {
						 
						 
//						 	echo '<table class="table">';
						 	while ($row = mysqli_fetch_assoc($result)) {
							
							
							echo '<tr>';
					
							echo '<td>' . $row['nom'] . '</td>';
							echo '<td>' . $row['annee'] . '</td>';
							echo '<td>' . $row['pays'] . '</td>';
							echo '<td>' ;
							echo '<img src=' .$row['path']. '>' ; 
							echo '</td>';
							
					
							echo '</tr>';
							}
//							echo '</table>';
							
						}	
						
						mysqli_close($con);
				?>
				</tbody>
				</table>
			</div>
			

		
	</body>
	
</html>