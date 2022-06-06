<?php
session_start();
include("db.php");

$msg="";
if(isset($_POST['sub'])){
	
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	
	$sql = mysqli_query($con,"SELECT * FROM `admin` WHERE `uname`='$uname' and `pass` ='$pass'");
	if(mysqli_num_rows($sql)>0){
		$row = mysqli_fetch_array($sql);
		$_SESSION['admin_id'] = $row['id'];
		Header("Location: index.php");
		
	}else{
		
		$msg= '<div class="alert alert-danger"><strong>Wrong lohin details!</strong> Try Again.</div>';
	}
	
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Panel</title>
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
      <h3>Войти как админ</h3>
    </div>
  </div>
  <div class="row">
		<?php if(isset($_GET['invalid'])) : ?>
			<div class="col-md-6 col-md-offset-3 col-lg-6 no-column-padding">
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Неверное имя пользователя или пароль.</strong> 
				</div>
			</div>
		<?php endif; ?>
	
    <div class="col-md-6 col-md-offset-3 col-lg-6">
      <form class="form-horizontal" id="loginForm" action="modules/verify.php" method="post" data-toggle="validator">
				<div class="form-group">
          <label for="inputEmail3" class="control-label">Имя пользователя</label>
          <input type="text" class="form-control" id="inputEmail3" name="uname" maxlength="16" placeholder="Username" required>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="control-label">Пароль</label>
          <input type="password" class="form-control" id="inputPassword3"  name="pass" maxlength="16" placeholder="Password" required>
        </div>
        <div class="form-group">
          <input type="submit" name="sub" class="btn btn-info btn-block" value="Войти">
        </div>
      </form>
    </div>
  </div>
	</div>
		</form>
		
	</div>
	
</div>
</div>
		</div>
		
	</div>
	
</div>

</body>
</html>
