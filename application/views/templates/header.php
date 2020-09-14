<!DOCTYPE html>
<html>
<head>
	<title>GeezTech</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min (2).css">
	
	<!-- --------------------- -->

	 <link rel="stylesheet" href="<?php echo base_url();?>assets/node_modules/bootstrap/dist/css/bootstrap.min.css">
	  <link rel="stylesheet" href="<?php echo base_url();?>assets/node_modules/bootstrap/dist/css/styles.css">
	 <!--  <link rel="stylesheet" href="<?php echo base_url();?>assets/node_modules/bootstrap/dist/css/New folder/bootstrap-responsive.min.css"
	 >
	 <link rel="stylesheet" href="<?php echo base_url();?>assets/node_modules/bootstrap/dist/css/New folder/bootstrap.min.css"> -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/node_modules/bootstrap-social/bootstrap-social.css">
   <!--  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/styles.css"> -->
	
	<script src="<?php echo base_url();  ?>assets/ckeditor/ckeditor.js"></script>


</head>
<body>
	<nav id="y" class="navbar navbar-dark navbar-expand-sm fixed-top">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
			
				<a class ="navbar-brand mr-auto" href="<?php echo base_url();?>home"><img src="<?php echo base_url(); ?>assets/images/geez.png" height="50" width="150"></a>
				
			
			<div id="Navbar" class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					
					<li class="nav-item"><a href="<?php echo base_url();?>home" class="nav-link"><span class="fa fa-home fa-lg"></span><strong> Home</strong></a></li>
					<li class="nav-item"><a href="<?php echo base_url();?>about" class="nav-link"><span class="fa fa-info"></span><strong> About</strong></a>
						<li class="nav-item"><a href="<?php echo base_url();?>contact" class="nav-link"><span class="fa fa-address-card fa-lg"></span><strong> Contact</strong></a></li>
					<li class="nav-item"><a href="<?php echo base_url();?>posts/latest" class="nav-link"><span class="fa fa-info fa-lg"></span><strong> Blog</strong></a></li>
					<li class="nav-item"><a href="<?php echo base_url();?>categories/index" class="nav-link"><span class="fa fa-bell fa-lg"></span><strong> Category</strong></a></li>
					<?php if($this->session->userdata('loggedin')): ?>
							<li class="nav-item"><a href="<?php echo base_url();?>post/create" class="nav-link"><span class="fa fa-bell fa-lg"></span><strong> Create Post</strong></a>
						</li>
						<li class="nav-item"><a href="<?php echo base_url();?>categories/create" class="nav-link"><span class="fa fa-list fa-lg"></span><strong> Create Category</strong></a>
						</li>
					<?php endif; ?>
						<?php if (!$this->session->userdata('loggedin')): ?>
								<li class="nav-item"><a href="<?php echo base_url();?>users/register"class="nav-link"><span class="fa fa-address-card fa-lg"></span><strong> Register</strong></a>
							</li>
						<?php endif; ?>
					</ul>
						<?php if(!$this->session->userdata('loggedin')): ?>
							<span class="navbar-text">
			                    <a data-toggle="modal" data-target="#loginModal">
			                    <span class="fa fa-sign-in fa-lg"></span><strong> Login</strong></a>
			                </span> 
		            <?php endif; ?>
					
               
             <?php if ($this->session->userdata('loggedin')):?>
             	   <ul class="navbar-nav mr-auto">
	                	<li class="nav-item"><a href="<?php echo base_url();?>users/logout" class="nav-link"><span class="fa fa-sign-out fa-lg"></span><strong> Logout</strong></a>
						</li>
					</ul>
                   <!--     <div>
                       	 <ul class="navbar-nav mr-auto">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>Usr <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Change Password</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url();?>users/logout">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                       </div> -->
             	
             <?php endif; ?>
			</div>
		</div>
	</nav>
	<div style="margin-top: 20px"></div>
	
	<!-- -----modal login -->
	<div id="loginModal" class="modal fade" role="dialog">
		
        <div class="modal-dialog modal-lg" role="content">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Sign In</h4>

			

                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <?php echo form_open('users/login'); ?>
                        <div class="form-row">
                            <div class="form-group col-sm-4">
                                    <label>User Name</label>
                                    <input type="text" name="username" class="form-control form-control-sm mr-1" placeholder="Enter User Name" autofocus>
                                    <?php echo form_error("username","<div style=color:red>","</div>"); ?>
                            </div>
                            <div class="form-group col-sm-4">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control form-control-sm mr-1" placeholder="Password">
                                <?php echo form_error("password","<div style=color:red>","</div>"); ?>
                            </div>
                            <div class="col-sm-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1">Login</button>        
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
	

	<div class="container">
		<!-- flashdta -->
		<?php if ($this->session->flashdata('user_registered')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('post_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('post_updated')): ?>
			<?php echo '<p class="alert alert-info">'.$this->session->flashdata('post_updated').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('post_deleted')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('post_deleted').'</p>'; ?>
		<?php endif; ?>

			<?php if ($this->session->flashdata('category_created')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
		<?php endif; ?>
		<?php if ($this->session->flashdata('login_failed')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
		<?php endif; ?>
		<?php if ($this->session->flashdata('user_loggedin')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
		<?php endif; ?>
		<?php if ($this->session->flashdata('user_loggedout')): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
		<?php endif; ?>

		<?php if ($this->session->flashdata('category_deleted')): ?>
			<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('category_deleted').'</p>'; ?>
		<?php endif; ?>



		
			
		

		
	

