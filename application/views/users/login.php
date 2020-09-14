<?php echo form_open('users/login'); ?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1 class="text-center"><?php echo $title; ?></h1>
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" placholder="Enter Your Username" class="form-control" autofocus> 
			<?php echo form_error("username","<div style=color:red>","</div>"); ?>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="Password" name="password"placholder="Enter Your Password" class="form-control">
				<?php echo form_error("password","<div style=color:red>","</div>"); ?>
		</div>
		<button type="submit" class="btn btn-primary btn-block">Login</button>

	</div>
</div>
<?php echo form_close(); ?>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<a href="<?php echo base_url(); ?>users/register">Don't Have an Account ?</a>
	</div>
</div>


