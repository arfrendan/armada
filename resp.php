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
		    
			
			
			<div class="table">
				<table class="table">
				<thead>
	  			<th>nom</th>
	  			<th>annee</th>
	  			<th>pays</th>
	  			<th>image</th>
	  			<th>edit et afficher</th>
	  			</thead>
	  			
	  			<tbody>
				<?php
						 include('connect.php');
						 $sql="select id,nom,pays,annee,path from bateau";
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
							
							echo '<td>' ;
								
							echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#afficherModal" onclick="values('.$row['id'].')">';
							echo $row['id'];
							echo '</button>';
							
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
			<div class="ajouterRow">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajouterModal">
  					ajouter
				</button>
				
			</div>
			
			
			
			
			
			
			
			
			
	<!-- Modal ajouter -->
			<div class="modal fade" id="ajouterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">ajouter</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="bateauAjouter.php">
		        	<div class="form-group">
                            <label for="bateau_nom" class="col-sm-3 control-label">nom</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bateau_nom" name="bateau_nom" 
                                       placeholder="entrer le nom de bateau">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="bateau_pays" class="col-sm-3 control-label">pays</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bateau_pays" name="bateau_pays" 
                                       placeholder="entrer le pays de bateau">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="bateau_annee" class="col-sm-3 control-label">annee</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bateau_annee" name="bateau_annee" 
                                       placeholder="entrer l'annee de bateau">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="bateau_long" class="col-sm-3 control-label">longueur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bateau_long" name="bateau_long" 
                                       placeholder="entrer la longueur de bateau">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="bateau_large" class="col-sm-3 control-label">largeur</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bateau_large" name="bateau_large" 
                                       placeholder="entrer la largeur de bateau">
                            </div>
                    </div>
                    <div class="form-group">
                            <label for="bateau_image" class="col-sm-3 control-label">image</label>
                            <div class="col-sm-9">
                            	<input type="file" class="form-control" id="bateau_image" name="bateau_image" >
                            </div>
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit" name="submit">Save changes</button>
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		
		<!-- Modal afficher-->
			<div class="modal fade" id="afficherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      
			      <div class="modal-body" id="body">
			      	<form action="" method="post" >
			      		<input type="hidden" id="id" name="id" value="" />
			      		<input type="submit" id="sub" value="submit" />
			      	</form>
			      	
			      	
			      	
			        <?php
	 					if(isset($_POST['sub'])){
	 						$id_bateau= $_POST['id'];
	 					}
	 					
						 include('connect.php');
						 $sql="select id,nom,pays,annee from bateau where id = $id_bateau";
						 $result = mysqli_query($con,$sql);
						 $rows = mysqli_num_rows($result);
						 
						 if ($result && $rows) {
						 
						 
						 	echo '<table class="table">';
						 	while ($row = mysqli_fetch_assoc($result)) {
					
							echo '<tr>';
					
							echo '<td>' . $row['id'] . '</td>';
							echo '<td>' . $row['nom'] . '</td>';
							echo '<td>' . $row['annee'] . '</td>';
							
					
							echo '</tr>';
							}
							echo '</table>';
							
						}	
						
						mysqli_close($con);
						 
					?>
			      </div>
			      
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        
			      </div>
			    </div>
			  </div>
			</div>
			<script>
				$("#afficherModal").modal("hide");
				function values(ID){
					var x=document.getElementById("id");
					id.value = ID;
					
				}
			</script>
			
	</body>
		
		
	
	
</html>