<!DOCTYPE html>
<html>
<head>
	<title>CiBlog</title>
	<link rel="stylesheet" type='text/css' href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type='text/css' href="<?php echo base_url('assets/css/style.css'); ?>">

</head>
<body>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class='navbar-brand' href="<?php echo base_url(); ?>">CiBlog</a>
		<button class="navbar-toggler" type="button" data-toggle='collapse'>
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collaps navbar-collapse" id='navbarNavAltMarkup'>
			<div class="navbar-nav col-sm-12">
				<a class='nav-item nav-link active' href="<?php echo base_url(); ?>">Home</a>
				<a class='nav-item nav-link' href="<?php echo base_url(); ?>about">About</a>
				<a class='nav-item nav-link' href="<?php echo base_url();?>posts">Blog</a>
				<a class='nav-item nav-link' href="<?php echo base_url();?>categories">Categories</a>	

				<?php if(!$this->session->userdata('logged_in')) : ?>
					<a class='nav-item nav-link' href="<?php echo base_url();?>users/login">Login</a>	
					<a class='nav-item nav-link' href="<?php echo base_url();?>users/register">Register</a>
				<?php endif; ?>	
				<?php if($this->session->userdata('logged_in')) : ?>				
					<a class='nav-item nav-link' href="<?php echo base_url();?>posts/create">Create post</a>
					<a class='nav-item nav-link' href="<?php echo base_url();?>categories/create">Create Category</a>
					<a class='nav-item nav-link' href="<?php echo base_url();?>users/logout">Logout</a>
				<?php endif; ?>					
<!-- 				<a class='nav-item nav-link' href="<?php echo base_url();?>Authentication">Register</a>		 -->			
			</div>
		</div>
	</nav>
</div>
<div class="container">

	<!-- Flash messages. -->
	<br>
	<?php if($this->session->flashdata('user_registered')):?>
		<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('user_registered').'</p>';?>
	<?php endif;?>

	
	<?php if($this->session->flashdata('post_created')):?>
		<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('post_created').'</p>';?>
	<?php endif;?>


	<?php if($this->session->flashdata('post_updated')):?>
		<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('post_updated').'</p>';?>
	<?php endif;?>


	<?php if($this->session->flashdata('category_created')):?>
		<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('category_created').'</p>';?>
	<?php endif;?>

	<?php if($this->session->flashdata('post_deleted')):?>
		<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('post_deleted').'</p>';?>
	<?php endif;?>


	<?php if($this->session->flashdata('login_failed')):?>
		<?php echo '<p class="alert alert-danger text-center">'.$this->session->flashdata('login_failed').'</p>';?>
	<?php endif;?>


	<?php if($this->session->flashdata('user_loggedin')):?>
		<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('user_loggedin').'</p>';?>
	<?php endif;?>


	<?php if($this->session->flashdata('user_loggedout')):?>
		<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('user_loggedout').'</p>';?>
	<?php endif;?>


	<?php if($this->session->flashdata('category_deleted')):?>
		<?php echo '<p class="alert alert-success text-center">'.$this->session->flashdata('category_deleted').'</p>';?>
	<?php endif;?>	