<html>
	<head>
		<title>My Firsp MVC App</title>
	</head>
	<body>
		<center>
			<h1><?php echo $heading; ?></h1>
			<?php
			 $data = array(
			 	'name' => 'frmCreate',
			 	'style'=>'font-family: Arial',
			 );
			 echo form_open('web/newEntry', $data); 
			 ?>
			 <?php
			 	$data = array(
			 		'name'=>'txtuser',
			 		'style' => 'color: #ff0000'
			 	);
			 	echo form_input($data);
			 ?>
			 <br>
			 <?php
			 	$data = array(
			 		'type' => 'password',
			 		'name'=>'txtPwd',
			 		'style' => 'color: #ff0000'
			 	);
			 	echo form_input($data);
			 ?>
				<br>
				<input type="submit" name="cmdSubmit" value="Create" />
			<?php echo form_close();?>
			<?php echo $msg_ ; ?>
			<?php echo anchor('web','Sign in');?>
		</center>
	</body>
</html>