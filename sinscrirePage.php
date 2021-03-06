<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	  <style>
		  .navi{
		  background: url(img/armadaFirst.png);
		  }
	  </style>
  </head>
  <body>
	  	<header class="navbar navbar-expand "></header>
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
	  	<div class="loginform" >
			<form class="form-horizontal" method="post" action="sinscrire.php">
				<fieldset >
					<div class="legend">
						<legend>inscrire</legend>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="inputNom">Nom</label>
						  <input type="text" class="form-control" id="inputNom" placeholder="Nom" name="nom">
						</div>
						<div class="form-group col-md-6">
						  <label for="inputPrenom">Prenom</label>
						  <input type="text" class="form-control" id="inputPrenom" placeholder="Prenom" name="prenom">
						</div>
					</div>
					
					<div class="form-group">
						<label  for="inputlogin" >LoginID</label>
						<input type="text" id="inputlogin"  name="loginID"  class="form-control" name="loginID" placeholder="loginID, chiffres et lettres"/>
					</div>
					
					<div class="form-group">
						<label for="inputpassword" >Password</label>
						<input type="password" class="form-control" name="password" name="password" placeholder="Password"/>
					</div>
					
					<div class="form-row">
						<div class="form-group col-md-4">
							<label for="inputSexe">Sexe</label>
							<select id="inputSexe" class="form-control" name="sexe">
								<option value="monsieur" selected="selected">Monsieur</option>
								<option value="madame">Madame</option>
							</select>
						</div>
						<div class="form-group col-md-8">
							<label for="inputEmail">Email</label>
							<input type="email" class="form-control" placeholder="e-mail" name="email"/>
						</div>
					</div>
					
					<div class="form-group">
						<div class="form-check">
							<input type="checkbox" class="form-check-input" name="verifier" id="gridCheck" value="verifier"/>
							<label for="gridCheck" class="form-check-label">Verifier</label>
						</div>
					</div>
					<button type="submit" class="btn btn-primary" value="submit" name="submit">s'inscrire</button>
				</fieldset>
			</form>
	  	</div>
	  	
	  	
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
  </body>
</html>