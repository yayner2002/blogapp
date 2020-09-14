
 <!-- <?php echo validation_errors(); ?> -->

<?php  echo form_open('users/register');?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h2 class="text-center"><?php echo $title; ?></h2>
	<div class="form-group">
	<label>Name</label>
	<input type="text" name="name" class="form-control" placeholder="Name">
	<?php echo form_error("name","<div style='color:red'>","</div>"); ?>
</div>
<div class="form-group">
	<label>Zip Code</label>
	<input type="text" name="zipcode" class="form-control" placeholder="ZipCode">
	<?php echo form_error("zipcode","<div style='color:red'>","</div>"); ?>
</div>
<div class="form-group">
	<label>Email</label>
	<input type="email" name="email" class="form-control" placeholder="Email">
	<?php echo form_error("email","<div style='color:red'>","</div>"); ?>
</div>
<div class="form-group">
	<label>User Name</label>
	<input type="text" name="username" class="form-control" placeholder="User Name">
	<?php echo form_error("username","<div style='color:red'>","</div>"); ?>
</div>
<div class="form-group">
	<label>Password</label>
	<input type="password" name="password" class="form-control" placeholder="Password">
	<?php echo form_error("password","<div style='color:red'>","</div>"); ?>
</div>
<div class="form-group">
	<label>Confirm Password</label>
	<input type="password" name="password2" class="form-control" placeholder="Confirm Password">
	<?php echo form_error("password2","<div style='color:red'>","</div>"); ?>
</div>
<button class="btn btn-primary btn-block">Register</button>	
	</div>
</div>
<?php echo form_close(); ?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<a href="<?php echo base_url(); ?>users/login">I Already Have an Account</a>
	</div>
</div>