<?php
	include 'dbcon.php';

		$query="select * from msg order by id desc";
		$run=$con->query($query);
		while ($row=$run->fetch_array()):
	?>
		<div class="received">
			<span style="color: green;"><?php echo $row['username'] ?></span>:
			<span style="color: brown;"><?php echo $row['msg'] ?></span>
			<span style="float: right;"><?php echo dateformat($row['time']) ?></span>
		</div>
	<?php endwhile; ?>