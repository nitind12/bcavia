<html>
	<head>
		<title>My Firsp MVC App</title>
		<style>
			body{
				font-family: verdana;
			}
		</style>
	</head>
	<body topmargin="50">
		<center>
			<div style="width: 200px; text-align: left; border: #808080 solid 1px; border-bottom: #808080 solid 3px; overflow: hidden; padding: 10px;">
				<div style="float: left">
					<h2>Sigin</h2>
					<?php
					 $data = array(
					 	'name' => 'frmPrac',
					 	'style'=>'font-family: Arial',
					 );
					 echo form_open('web/showdata', $data); 
					 ?>
					 <?php
					 	$data = array(
					 		'name'=>'txtuser',
					 		'style' => 'color: #ff0000; padding: 5px;'
					 	);
					 	echo form_input($data);
					 ?>
					 <br><br>
					 <?php
					 	$data = array(
					 		'type' => 'password',
					 		'name'=>'txtPwd',
					 		'style' => 'color: #ff0000; padding: 5px;'
					 	);
					 	echo form_input($data);
					 ?>
						<br><br>
						<input type="submit" name="cmdSubmit" value="Send" />
					<?php echo form_close();?>
				</div>
			</div>
		</center>
	</body>
</html>