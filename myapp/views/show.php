<html>
	<head>
		<title><?php echo $message; ?></title>
	</head>
	<body>
		<h2 style="float: left"><?php echo anchor('web/showusers', 'Show Users'); ?></h2>
		<h3 style="float: right; padding: 2px"><a href="<?php echo site_url('web/logout');?>">Logout</a> | </h3>
		<div style="clear: both"></div>
		<div style="border-top: #808080 solid 3px">
			Login <?php echo $message; ?><br>
			Main Page here....
		</div>
		<br>
		<br>
	</body>
</html>