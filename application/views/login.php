<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>UETCL JOB Grading</title>
  <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css">
</head>
<body class="hold-transition skin-blue">
<section id="home">
  <!--********************************************* LOGIN PAGE ********************************************-->
  <div class="container-fluid mt-3">
  <!-- Flash Messages -->
<?php if($this->session->flashdata('login_failed')): ?>
<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>';?>
<?php endif; ?>
  <!-- Flash Messages -->
  <?php if($this->session->flashdata('user_logout')): ?>
<?php echo '<p class="alert alert-danger">'.$this->session->flashdata('user_logout').'</p>';?>
<?php endif; ?>
    <div id = "instruction" style = "display:block">
      <div class = "row">
        <div class = " col-md-9">
        <!-- Description -->
        <div class = "card shadow">
          <div class = "card-header"><b>Description: </b></div>
          <div class = "card-body" style="line-height:2;">
            <p><b>UETCL Job Grading System</b> is our tool for grading job roles in the context of the organizational structure.It was designed following the <b>HAY 			Guide Charts</b>.
		The general purpose for carrying out job evaluations using this or similar job evaluation methods 
              is to enable organizations to determine the networth of each job role.
          </p>
          </div>
        </div>
        <br>
        <!--Steps to follow -->
        <div class="card shadow">
          <div class="card-header"><b>Guidelines: </b></div>
            <div class="card-body">
              <p><b>Note 1:</b> Enter your Username and Password to login, the system will use your access level to determine your next page.</p>
		<p><b>Note 2:</b> If you are authenticated as an admin, you can view and add new jobs others will just view.</p>
		
		<br>
		<p><b>Step 1:</b> To begin job grading, you are required to first enter the job title and Click <b>"START"</b></p>
              	<p><b>Step 2:</b> The first grading stage is "Know-how" (Only one option can be selected). After selecting , click next to proceed to next stage</p>
              	<p><b>Step 3:</b> The Second stage is "Problem-solving". The selection process is the same as in step 2</p>
              	<p><b>Step 3:</b> The second stage is "Acccountability". The selection is still the same way as the two previous steps.</p>
              	<p><b>Step 4:</b> After viewing the result, first save and the there you can add another position" if you want to continue</p>
            </div>
          </div>
      </div>
      <div class = " col-md-3">
        <div class = "card shadow">
        <div class="card-header text-right">
          Login
        </div>
        <div class="card-body">
        <?php echo form_open('users/login');?>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
              </div>
            <input id="username" type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
              </div>
            <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            <span class="invalid-feedback"></span>
            </div>
            <input type="submit" name="submit" value="Login" class="btn btn-outline-primary btn-block">
            </div>
            </div>
            <?php echo form_close();?>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer text-secondary text-center fixed-bottom">
<p class="footer pull-center">Copy Rights  <strong>&copy; </strong><?php echo date('Y').' UETCL'?></p>
</footer>
<!-- Assets -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Custom Script -->
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</body>
</html>
