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
	  <div class="loginform" align="center">
	  	<form class="form-horizontal" action="login.php" method="post">
	  		<fieldset>
	  			<div class="legend">
					<legend>Login</legend>
				</div>
					
				<br />
				<br />
				<br />
				<div class="control-group">
					<label class="control-label" for="inputlogin" >LoginID</label>
					<div class="controls">
						<input type="text" class="input-xlarge" placeholder="" name="loginID"/>
						
					</div>
				</div>
	  			
				
				<div class="control-group">
					<label class="control-label" for="inputpassword" >Password</label>
					<div class="controls">
						<input type="password" class="input-xlarge" placeholder="" name="password"/>
						
					</div>
				</div>
				<br />
				<br />
				<input class="btn-primary" type="submit" name="submit" value="login" width="200px"/>
	  			
	  		</fieldset>
	  	</form>
	  </div>
	  
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
  </body>
</html>