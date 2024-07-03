<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('Admin/header');
?>

<div class="container">
	<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4 jumbotron p-4 m-0">
<?= form_open('Admin/login')?>
	<h3>Login Panel</h3>
    <?php if($error=$this->session->flashdata('message'))?>
      <?php if($msg=$this->session->flashdata('msg_class'))?>
           <div class="alert <?=$msg ?>">
           <?= $error?>
            </div>
           <?php?>
           <?php if($msg2=$this->session->flashdata('error'))?>
           <div class="alert ">
           <?= $msg2?>
            </div>
           <?php?>
	<div class="form-group">
		<label for="">Email</label>
		<input type="email" name="email"  value="<?= set_value('email')?>" class="form-control">
		<?= form_error('email')?>
	</div>
	<div class="form-group">
		<label for="">Password</label>
		<input type="password" name="password" value="<?= set_value('password')?>" class="form-control">
		<?= form_error('password')?>
	</div>
	<div class="d-flex">
		<button class="btn-btn-primary m-auto">Login</button>
	</div>
	<div class="d-flex m-auto">
		<a href="<?= base_url('Admin/signup')?>">Create an account!</a>
	</div>
</div>
<div class="col-md-4"></div>
</div>
</div>
<?php 
$this->load->view('Admin/footer');
?>