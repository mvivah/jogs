<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>AH Job Grading System</title>
  <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/bootstrap.css">
  <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel = "stylesheet" href = "<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css">
</head>
<body class="hold-transition skin-blue">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">JOGS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>jobs">Jobs</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" name="jobpost" onsubmit="return false">
      <a href="<?php echo base_url(); ?>" class="btn btn-outline-primary my-2 my-sm-0">Add Jobs</a>
    </form>
  </div>
</nav>