<body style="background-color: rgb(245, 245, 245)">
<br>
<h2>Сведения о студентах</h2><br>
             
  <table class="table">
    <thead>
		<tr>
			<th>ID</th>
			<th>Имя</th>
			<th>Факультет</th>
			<th>Группа</th>
			<th>Уровень обучения</th>
			<th>Имя пользователя</th>
			
		</tr>
	</thead>
	<tbody>
	
	<?php
		$sql = mysqli_query($con,"SELECT * FROM `student`");
		while($row = mysqli_fetch_array($sql)){
		
	?>
	
	
		<tr>
			<td><?php echo $row['id'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php echo $row['faculty'] ?></td>
			<td><?php echo $row['batch'] ?></td>
			<td><?php echo $row['degree'] ?></td>
			<td><?php echo $row['uname'] ?></td>
			
			
		</tr>
		<?php } ?>
	
	
	</tbody>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>