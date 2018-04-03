
	<body>
		<div class="col-sm-12">&nbsp;</div>
		<div class="col-sm-3">
			<h2 style="float: left"><?php echo anchor('web/showusers', 'Show Users'); ?></h2>
		</div>
		<div class="col-sm-5"></div>
		<div class="col-sm-4">
			<h3 style="float: right; padding: 2px">
			<?php echo $this->session->userdata('user_'); ?>
			<a href="<?php echo site_url('web/logout');?>">Logout</a> | </h3>
		</div>
		
		<div class="col-sm-12">
			Login <?php echo $message; ?><br>
			Main Page here....
		</div>
		<br>
		<br>
	</body>
</html>