<html>
	<head>
		<title>My Firsp MVC App</title>
	</head>
	<body>
		<center>
			<table border="1" width="500">
				<?php foreach ($users as $item) { ?>
					<tr>
						<td><?php echo $item->USERNAME_; ?></td>
					</tr>	
				<?php } ?>
			</table>
		</center>
	</body>
</html>