<?php 

if(!isset($system_path)){ die('You shall not pass :)'); } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: rgb(245, 245, 245)">
<div class="container">
	<div class="row">
		<div class="col-md-12" align="center">

<form method="post" action="">
<?php echo $msg ?>
<div class="row align-items-center justify-content-center">
			<div class="col-md-6 col-md-offset-3">
<div class="panel panel-login" style="padding: 3%">
<div class="row justify-content-center">
<form method="post" class="form-horizontal col-md-12 col-md-offset-3">
<div class="row">
    <div class="col-md-6 col-md-offset-3 col-lg-6 text-center">
	<img src="logo.png" width="150" height="150" />
      <h3>Войти как преподаватель</h3>
    </div>
  </div>
   <div class="col-md-6 col-md-offset-3 col-lg-6">
   <form class="form-horizontal" id="loginForm" action="modules/verify.php" method="post" data-toggle="validator">
	<div class="form-group">
		<label for="inputEmail3" class="control-label">Имя пользователя</label>
		<td><input type="text" class="form-control" name="luser" placeholder="Username" required><br></td>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="control-label">Пароль</label>
		<td><input type="password" class="form-control" name="lpw" placeholder="Password" required><br></td>
	</div>
		<div class="form-group">
		<input type="submit" name="sub" class="btn btn-info btn-block" value="Войти">
	</div>	
	</form>
    <input type="hidden" id="loginform" name="loginform" value="4348260098DD5" />	
		</div>	
		</form>
			</div>	
	</div>
</div>
</div>
	</div>	
	</div>
</div>
</body>
</html>

