<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UETCL JOB Grading System</title>
    <link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css">
  </head>
  <body class="hold-transition skin-blue">
    <nav class="navbar navbar-expand-sm navbar-primary fixed-top shadow-sm" id="myP">
      <a class="navbar-brand" href="<?php echo base_url(); ?>home">UETCL JOB Grading</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">

    <?php if($this->session->userdata('logged_in')):?>
        <li class="nav-item dropdown active">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo $this->session->userdata('username');?> <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href = "<?php echo base_url(); ?>users/profile"><span class="far fa-user-circle"></span> Profile</a>
                <a class="dropdown-item" href="<?php echo base_url(); ?>/home"><span class="fas fa-users" aria-hidden="true"></span> Jobs</a>
                <?php if($this->session->userdata('level')=='Admin'):?>
                <a class="dropdown-item" href="<?php echo base_url(); ?>/users"><span class="fas fa-cogs" aria-hidden="true"></span> Admin</a>
                <?php endif;?>
                <a class="dropdown-item" href="<?php echo base_url(); ?>users/logout"><span class="fa fa-sign-out-alt" aria-hidden="true"></span> Logout</a>
            </div>
        </li>
      <?php endif;?>
    </ul>
      </div>
    </nav>
    <!-- Flash Registration Message -->
<?php if($this->session->flashdata('user_registered')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
<?php endif; ?>

<!-- Flash Messages -->
<?php if($this->session->flashdata('user_updated')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_updated').'</p>';?>
<?php endif; ?>

<!-- Flash Messages -->
<?php if($this->session->flashdata('user_deleted')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_deleted').'</p>';?>
<?php endif; ?>

<!-- Flash Grading Message -->
<?php if($this->session->flashdata('job_saved')): ?>
<?php echo '<p class="alert alert-success">'.$this->session->flashdata('job_saved').'</p>';?>
<?php endif; ?>
