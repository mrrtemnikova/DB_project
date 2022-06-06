<br>
<?php
$msg="";
if(isset($_POST['sub'])){
	
	$name = $_POST['name'];
	$faculty = $_POST['faculty'];
	$batch = $_POST['batch'];
	$degree = $_POST['degree'];
	$uname = $_POST['uname'];
	$pass = md5($_POST['pass']);
	
	$query = mysqli_query($con,"INSERT INTO `student` (`id`, `name`, `faculty`, `batch`, `degree`, `uname`, `pass`) VALUES (NULL,'$name','$faculty','$batch','$degree','$uname','$pass')");
	
	if($query){
		$sql = mysqli_query($con,"SELECT * FROM `student` WHERE `name` = '$name' AND `uname` = '$uname'");
		$r = mysqli_fetch_array($sql);
		$idd = $r['id'];
		mysqli_query($con,"INSERT INTO `student_attendance`(`id`, `sid`, `sub_code`) VALUES (NULL,'$idd','Not Set')");
		$msg= '<div class="alert alert-success"><strong>Success!</strong> Added New Student.</div>';
	}else{
		$msg= '<div class="alert alert-danger"><strong>Something Wrong!</strong> Try Again.</div>';
	}
}

?>
<body style="background-color: rgb(245, 245, 245)">
<form method="post" action="">
<h2>Добавить студентов</h2>
<br>
<?php echo $msg ?>
<table class="table table-hover">
	<tr>
		<td>Имя</td>
		<td><input type="text" class="form-control" name="name" size="50" required><br></td>
	</tr>
	<tr>
		<td>Факультет</td>
		<td>
			<select name="faculty" class="form-control">
				<option value="School of Computing">Информационных технологий</option>
			
			</select>
		<br>
		</td>
	</tr>
	<tr>
		<td>Группа</td>
		<td><input type="text" class="form-control" name="batch" required><br></td>
	</tr>
	<tr>
		<td>Уровень обучения</td>
		<td>
			<select name="degree" class="form-control">
				<option value="SE">Бакалавриат</option>
				<option value="NS">Магистратура</option>
			
			</select>
		
		<br></td>
	</tr>
	<tr>
		<td>Имя пользователя &nbsp; &nbsp; &nbsp; </td>
		<td><input type="text" class="form-control" name="uname" required><br></td>
	</tr>
	<tr>
		<td>Пароль</td>
		<td><input type="password" class="form-control" name="pass" required><br></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" class="btn btn-success" name="sub"><br></td>
		
	</tr>
	</table>
	<br><br><br><br><br><br>
</form>

