<?php
include("admin/db.php");
session_start();
 if(!isset($_SESSION['uid'])){
	 Header("Location: login.php");
	 
 }
 $msg ="";
 
 $sid = $_GET['id'];
 $uid = $_SESSION['uid'];
 
 if(isset($_POST['sub'])){
	 $code = $_POST['code'];
	 $sql1 = mysqli_query($con,"SELECT * FROM `subject_code` WHERE `subject_id` = '$sid' AND `Week_01` = '$code'");
	 $sql2 = mysqli_query($con,"SELECT * FROM `subject_code` WHERE `subject_id` = '$sid' AND `Week_02` = '$code'");
	 $sql3 = mysqli_query($con,"SELECT * FROM `subject_code` WHERE `subject_id` = '$sid' AND `Week_03` = '$code'");
	 $sql4 = mysqli_query($con,"SELECT * FROM `subject_code` WHERE `subject_id` = '$sid' AND `Week_04` = '$code'");
	 $sql5 = mysqli_query($con,"SELECT * FROM `subject_code` WHERE `subject_id` = '$sid' AND `Week_05` = '$code'");
	 $st = 0;
	 if(mysqli_num_rows($sql1)>0){
		 mysqli_query($con,"UPDATE `student_attendance` SET `week1` =1 WHERE `sid` = '$uid'");
		 mysqli_query($con,"UPDATE `student_attendance` SET `sub_code` =$sid WHERE `sid` = '$uid'");
		 $st = 1;
	 }else if(mysqli_num_rows($sql2)>0){
		 mysqli_query($con,"UPDATE `student_attendance` SET `week2` =1 WHERE `sid` = '$uid'");
		 mysqli_query($con,"UPDATE `student_attendance` SET `sub_code` =$sid WHERE `sid` = '$uid'");
		  $st = 1;
	}else if(mysqli_num_rows($sql3)>0){
		 mysqli_query($con,"UPDATE `student_attendance` SET `week3` =1 WHERE `sid` = '$uid'");
		 mysqli_query($con,"UPDATE `student_attendance` SET `sub_code` =$sid WHERE `sid` = '$uid'");
		  $st = 1;
	}else if(mysqli_num_rows($sql4)>0){
		 mysqli_query($con,"UPDATE `student_attendance` SET `week4` =1 WHERE `sid` = '$uid'");
		 mysqli_query($con,"UPDATE `student_attendance` SET `sub_code` =$sid WHERE `sid` = '$uid'");
		  $st = 1;
	}else if(mysqli_num_rows($sql5)>0){
		 mysqli_query($con,"UPDATE `student_attendance` SET `week5` =1 WHERE `sid` = '$uid'");
		 mysqli_query($con,"UPDATE `student_attendance` SET `sub_code` =$sid WHERE `sid` = '$uid'");
		  $st = 1;
	}
	
	if($st == 0){
		$msg = "<h2>Код неверный! Попробуйте снова</h2>";
	}else if($st == 1){
		$msg = "<h2>Код верный! Посещение отмечено</h2>";
	}
	
 }
 
 
?>



<!DOCTYPE html>
<html>
<head>
	<title>code submit page</title>
	<link rel="stylesheet" type="text/css" href="css\style3.css">
	<style type="text/css">
		body{
			background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(lechall2.jpg);
			background-size: cover;
			background-attachment:fixed;

		}
	</style>
</head>
<body>

	<div class="banner-area">
		<header>
			<ul class="menu">
				<li><a href="http://lababd/StuSubSelect.php">Домой</a></li>
				<li><a href="logout.php">Выйти</a></li>
			</ul>
		</header>
		
	</div>

	<div class="contact-title">
		<!--<h1>School Of Computing</h1>-->
		<h2>Система контроля посещаемости</h2>
	</div>
	<br>
	<div class="contact-title">
	<?php echo $msg  ?>
	</div>

	<div class="contact-form">
		<form id="contact-form" method="post" action="">
			<input type="text" name="code" class="form-control" placeholder="Введите одноразовый код-пароль"><br>

			<input type="submit" name="sub" class="form-control submit" value="Отправить">
		</form>

</body>
</html>