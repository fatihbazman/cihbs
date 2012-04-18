
<?php echo form_open(site_url('auth/login'),array('class'=>"well form-inline"));?>

  <?php echo form_input(array('name' => 'email', 'class'=>"input-medium", 'placeholder' => "Email"));?>
  <?php echo form_password(array('name'=> 'password', 'class'=>"input-medium", 'placeholder' => "Password"))?>
  <button type="submit" name="login" class="btn">LOGIN</button>
  
<?php echo form_close()?>