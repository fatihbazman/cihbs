    <h1>Hoşgeldin, <?php echo isset($username) ? $username : ''?></h1>
	
	<p>Adres satırından girilen değer : <?php echo isset($id) ? $id : ''?></p>
	
    <p><a href="<?php echo base_url()?>logout">Çıkış yap</a></p>