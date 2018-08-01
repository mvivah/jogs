<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>UETCL JOB Grading System</title>
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css">
  </head>
  <body class="hold-transition skin-blue">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm" id="myP">
      <a class="navbar-brand" href="<?php echo base_url(); ?>home">UETCL JOB Grading</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <form class="form-inline my-2 my-lg-0" name="jobpost" onsubmit="return false">
      <input class="form-control mr-sm-2" type="text" name="newjob" value="" placeholder="Enter a new job position" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="button" onclick="check1()">START</button>
    </form>
        </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>users">Users<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout<span class="sr-only">(current)</span></a>
      </li>
    </ul>
      </div>
    </nav>
    <div class="container-fluid mt-3">
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