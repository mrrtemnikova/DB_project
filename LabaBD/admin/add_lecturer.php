<br>
<?php



$msg="";
if(isset($_POST['sub'])){
	
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$faculty = mysqli_real_escape_string($con, $_POST['faculty']); 
	$uname = mysqli_real_escape_string($con, $_POST['uname']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $s_arr = explode(',', mysqli_real_escape_string($con, $_POST['subjects']));
    //var_dump($s_arr);
        $subjects = array();
    foreach($s_arr as $k => $v){
        $v = (int)$v;
        $subjects[] = $v;
    }
    //var_dump($subjects);
	
	$query = mysqli_query($con,"INSERT INTO `lecturer_login` (`name`, `faculty`, `username`, `password`, `uhash`, `subjects`) VALUES ('$name','$faculty','$uname','".md5($pass)."','".md5(date("Y-m-d H:i:s"))."','".serialize($subjects)."')");
	
	if($query){
		$msg= '<div class="alert alert-success"><strong>Success!</strong> Новый преподаватель добавлен.</div>';
	}else{
		$msg= '<div class="alert alert-danger"><strong>Ошибка!</strong> Попробуйте снова.</div>';
	}
}
?>
<body style="background-color: rgb(245, 245, 245)">
<form method="post" action="">
<h2>Добавить преподавателя</h2>
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
				<option value="Economics">Экономики</option>
			</select>
		<br>
		</td>
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
		<td>Учебные модули &nbsp; &nbsp; &nbsp; </td>
		<td><input type="text" class="form-control" name="subjects" required>
		
		Возможные идентификаторы предмета (должны быть разделены запятой):<br>
	
        <?php
        $sql = mysqli_query($con,"SELECT * FROM `subject`");
        
        while($arr = mysqli_fetch_assoc($sql)){
            echo '<b>'.$arr['id'].'</b> <- '.$arr['subject_name'].' ('.$arr['descr'].')<br>';
        }
        ?>
				<br>
        </td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" class="btn btn-success" name="sub"><br></td>
	</tr>

	</table>
<br><br><br><br><br><br>


</form>