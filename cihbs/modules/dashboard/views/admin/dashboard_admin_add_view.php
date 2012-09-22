	<h1>ADMIN PANELİ</h1>
	<p>Dashboard için Admin paneli </p>
	
	<p><a href="<?php echo base_url()?>logout">Çıkış yap</a></p>
	
	<h3><?php echo $id?></h3>
		
	<?php echo isset($page) ? $page : ''?>
	<p>Bu sayfa <strong>{elapsed_time}</strong> sn içinde açılmıştır.</p>
