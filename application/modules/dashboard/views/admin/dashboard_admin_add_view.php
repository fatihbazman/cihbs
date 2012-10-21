	<h1>Welcome to ADMIN site</h1>
	<p>admin panel - ADD method</p>
	
	<p><a href="<?php echo base_url()?>logout">Çıkış yap</a></p>
	
	<h3><?php echo $id?></h3>
		
	<?php echo isset($page) ? $page : ''?>
	<p>Page rendered in <strong>{elapsed_time}</strong> seconds - viva HMVC!</p>
