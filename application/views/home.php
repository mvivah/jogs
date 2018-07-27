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
        <a class="nav-link" href="<?php echo base_url(); ?>jobs">Graded Jobs</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" name="jobpost" onsubmit="return false">
      <input class="form-control mr-sm-2" type="text" name="newjob" value="" placeholder="Enter a new job position" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="button" onclick="check1()">Post</button>
    </form>
  </div>
</nav>
<section id="home">
<!--********************************************* HOME PAGE ********************************************-->
<div class="container" style="margin-top: 5rem;">
    <div id = "instruction" style = "display:block">
    <div class = "row">
    <div class = " col-md-12">
      <!-- Description -->
      <div class = "card shadow">
        <div class = "col-md-2"><p><b>Description: </b></p></div>
        <div class = "col-md-10">
          <p><b>AH Consulting JOG GRADING SYSTEM</b> is used by corporates and organizations to map out their job roles in 
              the context of the organizational structure. It was designed following the <b>HAY Guide Charts</b>.
              The general purpose for carrying out job evaluations using this or similar job evaluation methods 
              is to enable organizations to map and align their roles/jobs.
          </p>
        </div>
        <div class = "col-md-1"></div>
      </div>
      <br>
      <!--Steps to follow -->
      <div class = "card shadow">
        <div class = "col-md-2"><p><b>Steps to follow: </b></p></div>
        <div class = "col-md-10 container form-group">
          <p><b>Step1:</b> Click <b>"START"</b> to begin the job grading system, You will be prompted to enter the title of 
            the job role that you are going to grade. Enter the title and press OK</p>
          <p><b>Step 2:</b> The first grading stage is "Know-how" (Only one option can be selected). After selecting , click next to proceed to next stage</p>
          <p><b>Step 3:</b> The Second stage is "Problem-solving". The selection process is the same as in step 2</p>
          <p><b>Step 4:</b> The second stage is "Acccountability". The selection is still the same way as the two previous steps.</p>
          <p><b>Step 5:</b> After viewing the result, first save and then click on "Grade another position" if you want to continue</p>
        </div>
      </div>
      <br>
    <br>
    </div>
    </div>
    </div>
  </div>
<form id="jogs" name="jogs" onsubmit="return false">
<!--****************************************** KNOW HOW div ****************************************-->
<div id = "knowhow" style = "display:none">
<div class="container-fluid">
    <div class="row">
      <div class="col-md-3"><h3 class="box-title"><b>Know How</b></h3></div>
        <button class="btn btn-danger navgrp" id= "khnext" title = "Proceed to Problem Solving" onclick= "check2()">Proceed <i class="fas fa-angle-double-right"></i></button>
        </div>
        <br>
            <table class="table table-bordered">
              <tr>
                <tr>
                  <td rowspan="2" colspan = "3">
                    <!-- <p style = "text-align:right">Breadth of management know how <span class="fas arrow-right"></p>
                    <p>Depth and range of technical know how</p><span class="fas arrow-down"></span>
                   <p style = "text-align:right"> Human resource skills<span class="fas arrow-right"></p> -->
                  </td>
                  <th colspan="3" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">0. TASK</th>
                  <th colspan="3" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">1. ACTIVITY</th>
                  <th colspan="3" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">2. HOMOGENOUS</th>
                  <th colspan="3" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">3. HETEROGENOUS</th>
                  <th colspan="3" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">4. TOTAL</th>
                </tr>
                <tr>
                  <td scope="col" style = "background:#f5cfce">1</td>
                  <td scope="col" style = "background:#f5cfce">2</td>
                  <td scope="col" style = "background:#f5cfce">3</td>
                  <td scope="col" style = "background:#f5cfce">1</td>
                  <td scope="col" style = "background:#f5cfce">2</td>
                  <td scope="col" style = "background:#f5cfce">3</td>
                  <td scope="col" style = "background:#f5cfce">1</td>
                  <td scope="col" style = "background:#f5cfce">2</td>
                  <td scope="col" style = "background:#f5cfce">3</td>
                  <td scope="col" style = "background:#f5cfce">1</td>
                  <td scope="col" style = "background:#f5cfce">2</td>
                  <td scope="col" style = "background:#f5cfce">3</td>
                  <td scope="col" style = "background:#f5cfce">1</td>
                  <td scope="col" style = "background:#f5cfce">2</td>
                  <td scope="col" style = "background:#f5cfce">3</td>
                </tr>
              </tr>
              <tr>
                <tr>
                  <td rowspan="3" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>A. PRIMARY</b>
                    <br>Jobs requiring Secondary education only plus some work indoctrination
                  </td>
                  <th scope="col" style = "background:#f5cfce">A</th>
                  <td scope="col"><input type="radio" name ="kh" value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="kh" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="kh" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">A+</th>
                  <td scope="col"><input type="radio" name ="kh" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="kh" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="kh" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">A++</th>
                  <td scope="col"><input type="radio" name ="kh" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="kh" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1; position:center"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="172" title="172"></td>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>B. ELEMENTARY SCHOOL</b>
                  Jobs requiring familiarisation in uninvolved, standardised work routines and/or use of simple equipment and machines</td>
                  <th scope="col" style ="background:#f5cfce">B</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">B+</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">B++</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>C. VOCATIONAL</b>
                  Jobs requiring procedural or systematic profficiency which may involve facility
                   in the use of specialized equipment and machines</td>
                  <th scope="col" style = "background:#f5cfce">C</th>
                  <td scope="col"><input type="radio" name ="kh" value="66" title="64"></td>
                  <td scope="col"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">C+</th>
                  <td scope="col"><input type="radio" name ="kh" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">C++</th>
                  <td scope="col"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>D. ADVANCED VOCATIONAL</b>
                  Jobs requiring some specialized (generally non-theoritical) skills gained by on the job 
                  experience or through part proffessional qualification</td>
                  <th scope="col" style = "background:#f5cfce">D</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">D+</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">D++</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="460" title="460"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>E. BASIC PROFFESSIONAL</b>
                  Jobs requiring sufficiency in a technical, scientific or specialized field based on an understanding  
                  of concepts and principles normally associated with a proffessional or academic qualification or gained through a detailed grasp of involved practices and procedures</td>
                  <th scope="col" style = "background:#f5cfce">E</th>
                  <td scope="col"><input type="radio" name ="kh" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">E+</th>
                  <td scope="col"><input type="radio" name ="kh" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="528" title="528"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">E++</th>
                  <td scope="col"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col"><input type="radio" name ="kh" value="608" title="608"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>F. SEASONED PROFFESSIONAL</b>
                  Jobs requiring proffeciency in a technical, scientific or specialized field gained through broad and 
                  deep experience built on concepts and principles, or through exposure to complex practices and precendents</td>
                  <th scope="col" style = "background:#f5cfce">F</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">F+</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="700" title="700"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">F++</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="800" title="800"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan= "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>G. PROFFESIONAL MASTERY</b>
                  Jobs requiring determinative mastery of concepts, principles and practices gained through deep 
                  development in a highly specialized field or through deep development in a highly specialized field 
                  or through comprehensive business experience</td>
                  <th scope="col" style = "background:#f5cfce">G</th>
                  <td scope="col"><input type="radio" name ="kh" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="kh" value="800" title="800"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">G+</th>
                  <td scope="col"><input type="radio" name ="kh" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="kh" value="800" title="800"></td>
                  <td scope="col"><input type="radio" name ="kh" value="920" title="920"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">G++</th>
                  <td scope="col"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="800" title="800"></td>
                  <td scope="col"><input type="radio" name ="kh" value="800" title="800"></td>
                  <td scope="col"><input type="radio" name ="kh" value="920" title="920"></td>
                  <td scope="col"><input type="radio" name ="kh" value="1056" title="1056"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>H. UNIQUE AUTHORITY</b>
                  Jobs requiring outstanding knowledge and command of a profound discipline at pre-eminent level</td>
                  <th scope="col" style = "background:#f5cfce">H</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="kh" value="800" title="800"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="800" title="800"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="920" title="920"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="1056" title="1056"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">H+</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="kh" value="800" title="800"></td>
                  <td scope="col"><input type="radio" name ="kh" value="920" title="920"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="920" title="920"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="1056" title="1056"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="1216" title="1216"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">H++</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="kh" value="528" title="528"></td>
                  <td scope="col"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="700" title="700"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="800" title="800"></td>
                  <td scope="col"><input type="radio" name ="kh" value="800" title="800"></td>
                  <td scope="col"><input type="radio" name ="kh" value="920" title="920"></td>
                  <td scope="col"><input type="radio" name ="kh" value="1056" title="1056"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="1056" title="1056"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="1216" title="1216"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="kh" value="1400" title="1400"></td>
                </tr>
              </tr>  
            </table>
          </div>
          <!-- /.box-body -->
       </div>
        <!-- /.box -->
  </div>
<!--**************************************** PROBLEM SOLVING div ************************************-->
<div id = "problemsolving" style = "display:none">
  <div class="container-fluid">
    <div class= "row">
        <div class= "col-md-3"><h3 class="box-title"><b>Problem solving</b></h3></div>
        <div class="btn-group navgrp" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-outline-secondary" onclick= "back1()"><i class="fas fa-angle-double-left"></i> Back</button>
          <button type="button" class="btn btn-danger" onclick= "check3()">Proceed to Accountability <i class="fas fa-angle-double-right"></i></button>
        </div>
      </div>
        <br>
      <table class="table table-bordered">
        <tr>
          <tr>
            <td rowspan="2" colspan = "3">
             <p style = "text-align:right">Thinking Challenge <span class="fas arrow-right"></p>
              <p><span class="fas arrow-down"></span>Thinking Environment (Freedom to think)</p>
            </td>
            <th rowspan="2" colspan="2" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">0. REPETITIVE</th>
            <th rowspan="2" colspan="2" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">1. PARTENED</th>
            <th rowspan="2" colspan="2" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">2. letIABLE</th>
            <th rowspan="2" colspan="2" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">3. HETEROGENOUS</th>
            <th rowspan="2"colspan="2" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">4. TOTAL</th>
          </tr>
        </tr>
        <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>A. STRICT ROUTINE</b>
              <br>Thinking within detailed rules, instructions and/or rigid supervision
            </td>
            <th scope="col" style = "background:#f5cfce">A</th>
            <td scope="col"><input type="radio" name ="ps" value="10" title="10"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="14" title="14"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="19" title="19"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="25" title="25"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="33" title="33"></td>
            <td scope="col"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">A+</th>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="12" title="12"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="16" title="16"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="22" title="22"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="29" title="29"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="38" title="38"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>B. ROUTINE</b>
            Thinking within standard instructions and/or continuous close supervision</td>
            <th scope="col" style = "background:#f5cfce">B</th>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="12" title="12"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="16" title="16"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="22" title="22"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="29" title="29"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="38" title="38"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">B+</th>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="14" title="14"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="19" title="19"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="25" title="25"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="33" title="33"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="43"  title="43"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>C. SEMI-ROUTINE</b>
            Thinking with well defined procedures and precedents, somewhat diversified and/or supervised</td>
            <th scope="col" style = "background:#f5cfce">C</th>
            <td scope="col"><input type="radio" name ="ps" value="14" title="14"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="19" title="19"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="25" title="25"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="33" title="33"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="43" title="43"></td>
            <td scope="col"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">C+</th>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="16" title="16"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="22" title="22"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="29" title="29"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="38" title="38"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="50" title="50"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>D. STANDARDISED</b>
            Thinking within substantially diversified, established company procedures and standards, and general supervision</td>
            <th scope="col" style = "background:#f5cfce">D</th>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="16" title="16"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="22" title="22"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="29" title="29"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="38" title="38"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="50" title="50"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">D+</th>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="19" title="19"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="25" title="25"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="33" title="33"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="43" title="43"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="57" title="57"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>E. CLEARLY DEFINED</b>
            Thinking within clearly defined company policies, principles and specific objectives, under readily available direction</td>
            <th scope="col" style = "background:#f5cfce">E</th>
            <td scope="col"><input type="radio" name ="ps" value="19" title="19"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="25" title="25"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="33" title="33"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="43" title="43"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="57" title="57"></td>
            <td scope="col"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">E+</th>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="22" title="22"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="29" title="29"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="38" title="38"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="50" title="50"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="66" title="66"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>F. BROADLY DEFINED</b>
            Thinking within broad policies and objectives, under general direction</td>
            <th scope="col" style = "background:#f5cfce">F</th>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="22" title="22"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="29" title="29"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="38" title="38"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="50" title="50"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="66" title="66"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">F+</th>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="25" title="25"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="33" title="33"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="43" title="43"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="57" title="57"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="76" title="76"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan= "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>G. GENERALLY DEFINED</b>
            Thinking with general policies, principles and goals, under guidance</td>
            <th scope="col" style = "background:#f5cfce">G</th>
            <td scope="col"><input type="radio" name ="ps" value="25" title="25"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="33" title="33"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="43" title="43"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="57" title="57"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="76" title="76"></td>
            <td scope="col"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">G+</th>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="29" title="29"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="38" title="38"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="50" title="50"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="66" title="66"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="87" title="87"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>H. ABSTRACTLY DEFINED</b>
            Thinking withing business philosophy and/or principles controlling human affairs</td>
            <th scope="col" style = "background:#f5cfce">H</th>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="29" title="29"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="38" title="38"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="50" title="50"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="66" title="66"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="87" title="87"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">H+</th>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="33" title="33"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="43" title="43"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="57" title="57"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="76" title="76"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="100" title="100"></td>
          </tr>
        </tr>  
      </table>
      </div>
    </div>   
<!--***************************************** ACCOUNTABILITY div***************************************-->
<div id="accountability" style = "display:none">
  <div class="container-fluid">
    <div class="row">
      <div class= "col-md-3"><h3 class="box-title"><b>Accountability</b></h3></div>
     <div class="btn-group navgrp" role="group" aria-label="Basic example">
      <button type="button" class= "btn btn-outline-secondary" id= "accback" title="Go back to Problem solving div" onclick= "back2()"><i class="fas fa-angle-double-left"></i> Back
      </button>
      <button type="button" class= "btn btn-danger" id= "accnext" title ="Select an option before you proceed" onclick="check4()">Continue to Finish 
        <i class="fas fa-angle-double-right"></i>
      </button>
      </div>
      </div>
    <br>

    <table class="table table-bordered">
              <tr>
                <tr>
                  <td rowspan="4" colspan = "4">
                  <br><br><br><br>
                    <p style = "text-align:left"><b>Freedom to act</b> <span class="fas arrow-down"></p>
                  </td>
                  <th colspan="4" rowspan = "3" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">
                  </br></br>0. INDETERMINATE</th>
                  <th colspan="16" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">...MAGNITUDE</th>
                </tr>
                <tr>
                  <th colspan="4" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">1. VERY SMALL</th>
                  <th colspan="4" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">2. SMALL</th>
                  <th colspan="4" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">3. MEDIUM</th>
                  <th colspan="4" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">4. LARGE</th>
                </tr>
                <tr>
                  <th colspan="16" scope="colgroup" style="width: 100px; text-align:center; background:#e98f8e">..IMPACT</th>
                </tr>
                <tr>
                  <td scope="col" style = "background:#f5cfce">A</td>
                  <td scope="col" style = "background:#f5cfce">B</td>
                  <td scope="col" style = "background:#f5cfce">C</td>
                  <td scope="col" style = "background:#f5cfce">D</td>
                  <td scope="col" style = "background:#f5cfce">R</td>
                  <td scope="col" style = "background:#f5cfce">C</td>
                  <td scope="col" style = "background:#f5cfce">S</td>
                  <td scope="col" style = "background:#f5cfce">P</td>
                  <td scope="col" style = "background:#f5cfce">R</td>
                  <td scope="col" style = "background:#f5cfce">C</td>
                  <td scope="col" style = "background:#f5cfce">S</td>
                  <td scope="col" style = "background:#f5cfce">P</td>
                  <td scope="col" style = "background:#f5cfce">R</td>
                  <td scope="col" style = "background:#f5cfce">C</td>
                  <td scope="col" style = "background:#f5cfce">S</td>
                  <td scope="col" style = "background:#f5cfce">P</td>
                  <td scope="col" style = "background:#f5cfce">R</td>
                  <td scope="col" style = "background:#f5cfce">C</td>
                  <td scope="col" style = "background:#f5cfce">S</td>
                  <td scope="col" style = "background:#f5cfce">P</td>
                </tr>
              </tr>
              <tr>
                <tr>
                  <td rowspan="3" colspan = "3" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>A. PRESCRIBED</b>
                    <br>These jobs are subject to:<br>  -Direct and detailed instructions<br>  -Close supervision
                  </td>
                  <th scope="col" style = "background:#f5cfce">A</th>
                  <td scope="col"><input type="radio" name ="acc" value="8" title="8"></td>
                  <td scope="col"><input type="radio" name ="acc" value="10" title="10"></td>
                  <td scope="col"><input type="radio" name ="acc" value="14" title="14"></td>
                  <td scope="col"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="10" title="10"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="14" title="14"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col"><input type="radio" name ="acc" value="14" title="14"></td>
                  <td scope="col"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">A+</th>
                  <td scope="col"><input type="radio" name ="acc" value="9" title="9"></td>
                  <td scope="col"><input type="radio" name ="acc" value="12" title="12"></td>
                  <td scope="col"><input type="radio" name ="acc" value="16" title="16"></td>
                  <td scope="col"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="12" title="12"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="16" title="16"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col"><input type="radio" name ="acc" value="16" title="16"></td>
                  <td scope="col"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc" value="66" title="66"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">A++</th>
                  <td scope="col"><input type="radio" name ="acc" value="10" title="10"></td>
                  <td scope="col"><input type="radio" name ="acc" value="14" title="14"></td>
                  <td scope="col"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="14" title="14"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "3" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>B. CONTROLLED</b>
                  These jobs are subject to:<br>  -Instructions and established work routines<br>  -Close supervision</td>
                  <th scope="col" style = "background:#f5cfce">B</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="12" title="12"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="16" title="16"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col"><input type="radio" name ="acc" value="16" title="16"></td>
                  <td scope="col"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="87" title="87"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">B+</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="14" title="14"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc" value="19" title="19"></td>
                  <td scope="col"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="100" title="100"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">B++</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="16" title="16"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="acc" value="22" title="22"></td>
                  <td scope="col"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="115" title="115"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "3" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>C. STANDARDISED</b>
                  These jobs are subject, wholly or in part to:<br> -Standardisez practices and procedures<br> -General work instructions 
                  <br>  -Supervision of progress and results</td>
                  <th scope="col" style = "background:#f5cfce">C</th>
                  <td scope="col"><input type="radio" name ="acc"value="19" title="19"></td>
                  <td scope="col"><input type="radio" name ="acc"value="25" title="25"></td>
                  <td scope="col"><input type="radio" name ="acc"value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc"value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="25" title="25"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="33" title="33"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc"value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc"value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc"value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc"value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc"value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc"value="132" title="132"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">C+</th>
                  <td scope="col"><input type="radio" name ="acc"value="22" title="22"></td>
                  <td scope="col"><input type="radio" name ="acc"value="29" title="29"></td>
                  <td scope="col"><input type="radio" name ="acc"value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="acc"value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="29" title="29"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc"value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="acc"value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc"value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc"value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc"value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc"value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc"value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="acc"value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc"value="152" title="152"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">C++</th>
                  <td scope="col"><input type="radio" name ="acc" value="25" title="25"></td>
                  <td scope="col"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "3" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>D. REGULATED</b>
                  These jobs are subject, wholly or in part to:<br>  -Practies and procedures which have clear precedents and are 
                  covered by closely defined policies<br>  -Managerial control<br> -Review of results  </td>
                  <th scope="col" style = "background:#f5cfce">D</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="29" title="29"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">D+</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="33" title="33"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">D++</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="38" title="38"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "3" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>E. DIRECTED</b>
                  These jobs are subject to:<br> -Broad practice and procedures covered by functional precedents and policies
                  <br> -Achievement of a circumscribed operational activity<br> -Managerial direction</td>
                  <th scope="col" style = "background:#f5cfce">E</th>
                  <td scope="col"><input type="radio" name ="acc" value="43" title="43"></td>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="acc" value="304" title="304"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">E+</th>
                  <td scope="col"><input type="radio" name ="acc" value="50" title="50"></td>
                  <td scope="col"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="acc" value="350" title="350"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">E++</th>
                  <td scope="col"><input type="radio" name ="acc" value="57" title="57"></td>
                  <td scope="col"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="400" title="400"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "3" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>F. GENERALLY GUIDED</b>
                  These jobs by their nature or size, are subject to:<br> -Functional policy objectives <br> -General direction</td>
                  <th scope="col" style = "background:#f5cfce">F</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="66" title="66"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="460" title="460"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">F+</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="76" title="76"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="528" title="528"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">F++</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="87" title="87"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="608" title="608"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan= "3" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>G. GUIDED</b>
                 These jobs are subject only to guidance and broad direction on orientation of policy</td>
                  <th scope="col" style = "background:#f5cfce">G</th>
                  <td scope="col"><input type="radio" name ="acc" value="100" title="100"></td>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col"><input type="radio" name ="acc" value="700" title="700"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">G+</th>
                  <td scope="col"><input type="radio" name ="acc" value="115" title="115"></td>
                  <td scope="col"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="acc" value="800" title="800"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">G++</th>
                  <td scope="col"><input type="radio" name ="acc" value="132" title="132"></td>
                  <td scope="col"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col"><input type="radio" name ="acc" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="acc" value="920" title="920"></td>
                </tr>
                <tr>
                <tr>
                  <td rowspan="3" colspan = "3" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>H. </b></td>
                  <th scope="col" style = "background:#f5cfce">H</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="152" title="152"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="acc" value="800" title="800"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="800" title="800"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="1056" title="1056"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">H+</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="175" title="175"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="acc" value="230" title="230"></td>
                  <td scope="col"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="304" title="304"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="acc" value="400" title="400"></td>
                  <td scope="col"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col"><input type="radio" name ="acc" value="700" title="700"></td>
                  <td scope="col"><input type="radio" name ="acc" value="920" title="920"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="528" title="528"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="700" title="700"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="920" title="920"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="1216" title="1216"></td>
                </tr>
                <tr>
                  <th scope="col" style = "background:#f5cfce">H++</th>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="200" title="200"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="260" title="260"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="acc" value="264" title="264"></td>
                  <td scope="col"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="350" title="350"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="800" title="800"></td>
                  <td scope="col"><input type="radio" name ="acc" value="460" title="460"></td>
                  <td scope="col"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col"><input type="radio" name ="acc" value="800" title="800"></td>
                  <td scope="col"><input type="radio" name ="acc" value="1056" title="1056"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="608" title="608"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="800" title="800"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="1056" title="1056"></td>
                  <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="acc" value="1400" title="1400"></td>
                </tr>
              </tr>  
    </table>
  </div>
</div>

<!-- End of form -->
</form>
</div>

<!-- End Body Section -->
</section>
<!-- Display modals -->
<div class="modal fade" id="warn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h5 class="modal-title" id="exampleModalLabel">Attention!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="warnmsg">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="product">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h4 class="modal-title">Grading Results</h4>
          </button>
        </div>
        <div class="modal-body" id="results">
          <div class="row">
            <div class="col-md-12">
            <table class="table table-sm">
              <form name="matched" action="items/store" id="matched">
              <tbody>
                <tr>
                  <td>Job Title</td>
                  <td><input type="text"  id="display_title" name="jobTitle" value="" class="form-control" readonly></td>
                </tr>
                <tr>
                  <td>Know How</td>
                  <td><input type="text"  id="display_kh" name="knowHow" value="" class="form-control" readonly></td>
                </tr>
                <tr>
                  <td>Problem Solving</td>
                  <td><input type="text" id="display_ps" name="problemSolving" value="" class="form-control" readonly></td>
                </tr>
                <tr>
                  <td>Accountability</td>
                  <td><input type="text" id="display_ac" name="accountability" value="" class="form-control" readonly></td>
                </tr>
                <tr>
                  <td>Intersect</td>
                  <td><input type="text" id="display_ft" name="intersect" value="" class="form-control" readonly></td>
                </tr>
              </tbody>
            </table>
            </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" onclick="saveData();">Save Results</button>
            </form>
          <button type="button" class="btn" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> You have been signed in successfully!
</div>
<footer class="footer text-secondary text-center">
<p class="footer pull-center">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'AH Consulting 2018</strong>' : '' ?></p>
</footer>
<!-- Assets -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Custom Script -->
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</body>
</html>