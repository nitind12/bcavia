	<body topmargin="50">
		<center>
			<!--div style="width: 200px; text-align: left; border: #808080 solid 1px; border-bottom: #808080 solid 3px; overflow: hidden; padding: 10px;"-->
			<div class="col-sm-4">A</div>
			<div class="col-sm-4">
				<div class="form-group">
				<div style="float: left">
					<h2>Sign in</h2>
					<?php
					 $data = array(
					 	'name' => 'frmPrac',
					 	'style'=>'font-family: Arial',
					 	'class' => 'form'
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
						<input type="submit" name="cmdSubmit" class="btn btn-primary" value="Send" />
					<?php echo form_close();?>
				</div>
			</div>
			</div>
			<div class="col-sm-4">C</div>
			
		</center>
	</body>
