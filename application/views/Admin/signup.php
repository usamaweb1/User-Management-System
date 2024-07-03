<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Admin/header');
?>

<div class="container">
	<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 jumbotron p-4 m-0">
<?= form_open('Admin/signup')?>
	<h3>Register Panel</h3>
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email"  value="<?= set_value('email')?>" class="form-control">
		<?= form_error('email')?>
	</div>
	<div class="form-group">
		<label for="">Full Name</label>
		<input type="text" name="full_name" value="<?= set_value('full_name')?>" class="form-control">
		<?= form_error('full_name')?>
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" value="<?= set_value('password')?>" class="form-control">
		<?= form_error('password')?>
	</div>
	<div class="d-flex">
		<button class="btn-btn-primary m-auto">Signup</button>
	</div>
	<div class="d-flex m-auto">
		<a href="<?= base_url('Admin/login')?>"> Already have an account!</a>
	</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
<?php 
$this->load->view('Admin/footer');
?>