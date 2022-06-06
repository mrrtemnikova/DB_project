<?php
include("admin/db.php");
session_start();
 if(!isset($_SESSION['uid'])){
	 Header("Location: login.php");
	 
 }
?>


<!DOCTYPE html>
<html>
<head>
	<title>Stu_Sub_Select</title>
	<link rel="stylesheet" type="text/css" href="css\style1.css">
	<style type="text/css">
		body{
			background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.7)),url(lechall.jpg);
			background-size: cover;
			background-attachment:fixed;
		}
		.fixed-header
{
width: 100%;
position: fixed;
background: #333;
padding: 3px 3px;
color: #fff;
}
.fixed-header{
top: s;
}
.container{
width: 100%;
margin: 0 auto;
}
nava{
color: #fff;
padding: 25px 25px;
display: inline-block;
}
	</style>
</head>
<body>
<div class="fixed-header">
<div class="container">
<nav>
<a href="#" class="logo">AMS</a>
			<div class="menu" text-align="margin-right">
				<li><a href="http://lababd/StuSubSelect.php">Домой</a></li>
				<li><a href="logout.php">Выйти</a></li>

		</div>
</nav>
</div>
</div>

	

	<div class="banner-text">

			<?php 
			$s1 = mysqli_query($con,"SELECT * FROM `subject`");
			while($r1= mysqli_fetch_array($s1)){
			?>
				<a href="submitpage.php?id=<?php echo $r1['id']; ?>"><?php echo $r1['subject_name']; ?></a>
				<?php
				
			}
			
			?>
			 
	</div>
</body>
</html>