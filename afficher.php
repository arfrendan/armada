<?php
	 					if(isset($_POST['sub'])){
	 						$id_bateau= $_POST['id'];
	 					}
	 					
						 include('connect.php');
						 $sql="select id,nom,pays,annee from bateau";
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