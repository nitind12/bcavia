<html>
	<head>
		<title>My Firsp MVC App</title>
		<style>
			#foredit{
				display: none;
			}
			body{
				font-family: arial;
			}
		</style>
		<script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery1.js');?>"></script>
		<script type="text/javascript">
			var site_url = '<?php echo site_url();?>';
		</script>
		<script>
			$(function(){
				$('body').on('click', '.edit', function(){
					$('#foredit').css({'display': 'block'});
					$('#user_').val(this.id);

					data_ = $('#foredit').serialize();
					url_ = site_url + "/web/updateuser";

					$.ajax({
						type: "POST",
						url: url_,
						data: data_,
						success: function(data){
							$('#print_here').html('');
							$('#myplace').click();
						}
					});
				});
				
				$('#myplace').click(function(){
					url_ = site_url + "/web/getusers"
					$('#print_here').html('Loading...');
					$.ajax({
						type: "POST",
						url: url_,
						success: function(data){
							var obj = JSON.parse(data);
							var str = '';
							str = str + "<table border='1' width='300'>"
							str = str + "<tr><th>Username</th><th>Action</th>"
							for(i=0; i<obj.users.length; i++){
								str = str + "<tr><td>";
								str = str + obj.users[i].USERNAME_ + "<br>";
								str = str + "</td>";
				str = str + "<td id="+obj.users[i].USERNAME_+" class='edit'>Edit</td>"
								str = str + "</tr>";    
							}
							str = str + "</table>";

							$('#print_here').html(str);
						}
					});
					//$('#print_here').html(url_);
				});
			});
		</script>
	</head>
	<body>
		<h2 id="myplace" style="float: left">Click</h2>
		<h3 style="float: right; padding: 2px"><a href="<?php echo site_url('web/mainpage');?>">Back</a></h3>
		<h3 style="float: right; padding: 2px"><a href="<?php echo site_url('web/logout');?>">Logout</a> | </h3>
		<br>
		<center>
			<form id="foredit">
				Username: <input type="text" id="user_" name="user_">
			</form>
			<br>
			<div style="clear: both" id="print_here"></div>		
		</center>
	</body>
</html>