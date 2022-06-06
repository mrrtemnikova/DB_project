<body style="background-color: rgb(245, 245, 245)">
<br>
<h2>Посещаемость студентов по дисциплине СУБД</h2> <br>
             
  <table class="table" style="text-align:center">
    <thead style="text-align:center">
		<tr>
			<th>ID студента</th>
			<th>Имя студента</th>
			<th>1 Н.</th>
			<th>2 Н.</th>
			<th>3 Н.</th>
			<th>4 Н.</th>
			<th>5 Н.</th>
			<th>Процент посещаемости</th>
			
		</tr>
	</thead>
	<tbody>
	
	<?php
		$sql = mysqli_query($con,"SELECT * FROM `student_attendance` JOIN `student` ON student_attendance.sid=student.id ORDER BY sub_code "); 
		while($row = mysqli_fetch_array($sql)){
		
	?>
	
	
		<tr>
			<td><?php echo $row['sid'] ?></td>
			<td><?php echo $row['name'] ?></td>
			<td><?php
			$p=0;
				if($row['week1'] ==1){
					echo "П";
					$p+=1;
				}else{
					echo "-";
				}
			
			?></td>
			<td><?php 
					if($row['week2'] ==1){
						$p+=1;
					echo "П";
				}else{
					echo "-";
				}

			?></td>
			<td><?php 
					if($row['week3'] ==1){
						$p+=1;
					echo "П";
				}else{
					echo "-";
				}

			?></td>
			<td><?php 
					if($row['week4'] ==1){
						$p+=1;
					echo "П";
				}else{
					echo "-";
				}
			?></td>
			<td><?php 
					if($row['week5'] ==1){
						$p+=1;
					echo "П";
				}else{
					echo "-";
				}
			?></td>
			<td><?php 
			
			echo $p*20;
			echo "%";


			?></td>
			
			
		</tr>
		<?php } ?>
	
	
	</tbody>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>