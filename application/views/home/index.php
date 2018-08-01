<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<section id="home">
<!--********************************************* HOME PAGE ********************************************-->
<div class="container" style="margin-top: 5rem;">
  <div id = "instruction" style = "display:block">
    <div class="row">
      <div class="col-md-12">
            <?php if($jobs<1):?>
                    There are no graded jobs
                    </div>
                </div>
            <?php else:?>
            <table class="table table-sm table-stripped">
                <tr>
                    <th>Title</th>
                    <th>Know How</th>
                    <th>Problem Solving</th>
                    <th>Problem Solving</th>
                    <th>Final Score</th>
                </tr>
                <?php foreach($jobs as $job):?>
                <tbody>
                    <tr>
                        <td><?php echo $job['jobTitle'];?></td>
                        <td><?php echo $job['knowHow'];?></td>
                        <td><?php echo $job['problemSolving'];?></td>
                        <td><?php echo $job['accountability'];?></td>
                        <td><?php echo $job['total'];?></td>
                    </tr>
                </tbody>
                <?php endforeach;?>
            </table>
        <?php endif;?>
    </div>
</div>

        </div>
      </div>
    </div>
  </div>
</div>
<form id="jogs" name="jogs" onsubmit="return false">
<!--****************************************** KNOW HOW div ****************************************-->
<div id = "knowhow" style = "display:none">
<div class="container-fluid">
    <div class="row" id="navnu">
      <div class="col-md-3"><h3 class="box-title"><b>Know How</b></h3></div>
        <button class="btn btn-danger navgrp" id= "khnext" title = "Proceed to Problem Solving" onclick= "check2()">Proceed <i class="fas fa-angle-double-right"></i></button>
        </div>
        <br>
        <table class="table table-bordered">
              <tr>
                <tr>
                  <td rowspan="2" colspan = "3">
                  <div style = "text-align:right">Breadth of management know how <span class="fa fa-arrow-right"></div>
                  <div class="card testpos text-white">Depth and range of technical know how <span class="fa fa-arrow-down"></span></div>
                  <div class = "card bread text-right text-white"> Human Relations Skills <span class="fa fa-arrow-right"></div>
                  </td>
                  <td colspan="3" scope="colgroup" style="background:#e98f8e"><strong>0. TASK</strong><br class="dets">Performance of a task, highly specific as to objective and content and not involving the supervision of others</td>
                  <td colspan="3" scope="colgroup" style="background:#e98f8e"><strong>I. ACTIVITY</strong><br class="dets">Performance or supervision of work which is specific as to objective and content with apropriate awareness of related activities</td>
                  <td colspan="3" scope="colgroup" style="background:#e98f8e"><strong>II. HOMOGENOUS</strong><br class="dets">Internal integration of operations which are relatively homogeneous in nature and objectives and which involve external co-ordination with associated functions</td>
                  <td colspan="3" scope="colgroup" style="background:#e98f8e"><strong>III. HETEROGENOUS</strong><br class="dets">Operational or conceptual integration of functions which are diverse in nature and in objective in an important management area or central co-ordination of a strategic function</td>
                  <td colspan="3" scope="colgroup" style="background:#e98f8e"><strong>IV. TOTAL</strong></th>
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
    <div class= "row" id="navnu1">
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
             <p style = "text-align:right">Thinking Challenge <span class="fa fa-arrow-right"></p>
              <p>Thinking Environment (Freedom to think)<span class="fa fa-arrow-down"></span></p>
            </td>
            <td rowspan="2" colspan="2" scope="colgroup" style=" background:#e98f8e"><strong>1. REPETITIVE</strong><br> Identical situations requiring solution by simple choice of things learned</td>
            <td rowspan="2" colspan="2" scope="colgroup" style=" background:#e98f8e"><strong>2. PATTERNED</strong><br>Similar situations requiring solution by discriminating choice of things learned</td>
            <td rowspan="2" colspan="2" scope="colgroup" style=" background:#e98f8e"><strong>3. VARIABLE</strong><br>Differing situatins requiring the identification and selection of solutions through the application of acquired knowledge</td>
            <td rowspan="2" colspan="2" scope="colgroup" style=" background:#e98f8e"><strong>4 ADAPTIVE</strong><br>Situations requiring analytical interpretative and / or constructive thinking and a significant degree of evaluative judgement</td>
            <td rowspan="2"colspan="2" scope="colgroup" style=" background:#e98f8e"><strong>5. UNCHARTERED</strong><br>Pathfinding situations requiring creative thinking and the development of new concepts and approcahes contributing significantly to the advancement of knowledge and thought </td>
          </tr>
        </tr>
        <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>A. STRICT ROUTINE</b>
              <br>Thinking within detailed rules, instructions and/or rigid supervision
            </td>
            <th scope="col" style = "background:#f5cfce">A</th>
            <td scope="col"><input type="radio" name ="ps" value="10" title="10 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="14" title="14 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="19" title="19 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="25" title="25 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="33" title="33 %"></td>
            <td scope="col"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">A+</th>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="12" title="12 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="16" title="16 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="22" title="22 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="29" title="29 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="38" title="38 %"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>B. ROUTINE</b>
            Thinking within standard instructions and/or continuous close supervision</td>
            <th scope="col" style = "background:#f5cfce">B</th>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="12" title="12 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="16" title="16 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="22" title="22 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="29" title="29 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="38" title="38 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">B+</th>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="14" title="14 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="19" title="19 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="25" title="25 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="33" title="33 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="43"  title="43 %"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>C. SEMI-ROUTINE</b>
            Thinking with well defined procedures and precedents, somewhat diversified and/or supervised</td>
            <th scope="col" style = "background:#f5cfce">C</th>
            <td scope="col"><input type="radio" name ="ps" value="14" title="14 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="19" title="19 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="25" title="25 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="33" title="33 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="43" title="43 %"></td>
            <td scope="col"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">C+</th>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="16" title="16 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="22" title="22 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="29" title="29 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="38" title="38 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="50" title="50 %"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>D. STANDARDISED</b>
            Thinking within substantially diversified, established company procedures and standards, and general supervision</td>
            <th scope="col" style = "background:#f5cfce">D</th>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="16" title="16 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="22" title="22 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="29" title="29 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="38" title="38 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="50" title="50 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">D+</th>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="19" title="19 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="25" title="25 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="33" title="33 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="43" title="43 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="57" title="57 %"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>E. CLEARLY DEFINED</b>
            Thinking within clearly defined company policies, principles and specific objectives, under readily available direction</td>
            <th scope="col" style = "background:#f5cfce">E</th>
            <td scope="col"><input type="radio" name ="ps" value="19" title="19 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="25" title="25 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="33" title="33 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="43" title="43 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="57" title="57 %"></td>
            <td scope="col"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">E+</th>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="22" title="22 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="29" title="29 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="38" title="38 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="50" title="50 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="66" title="66 %"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>F. BROADLY DEFINED</b>
            Thinking within broad policies and objectives, under general direction</td>
            <th scope="col" style = "background:#f5cfce">F</th>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="22" title="22 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="29" title="29 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="38" title="38 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="50" title="50 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="66" title="66 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">F+</th>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="25" title="25 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="33" title="33 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="43" title="43 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="57" title="57 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="76" title="76 %"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan= "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>G. GENERALLY DEFINED</b>
            Thinking with general policies, principles and goals, under guidance</td>
            <th scope="col" style = "background:#f5cfce">G</th>
            <td scope="col"><input type="radio" name ="ps" value="25" title="25 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="33" title="33 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="43" title="43 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="57" title="57 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="76" title="76 %"></td>
            <td scope="col"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">G+</th>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="29" title="29 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="38" title="38 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="50" title="50 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="66" title="66 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="87" title="87 %"></td>
          </tr>
          <tr>
          <tr>
            <td rowspan="2" colspan = "2" scope="rowgroup" style="width: 100px;background:#e98f8e"><b>H. ABSTRACTLY DEFINED</b>
            Thinking withing business philosophy and/or principles controlling human affairs</td>
            <th scope="col" style = "background:#f5cfce">H</th>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="29" title="29 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="38" title="38 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="50" title="50 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col"><input type="radio" name ="ps" value="66" title="66 %"></td>
            <td scope="col"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="87" title="87 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
          </tr>
          <tr>
            <th scope="col" style = "background:#f5cfce">H+</th>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="33" title="33 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="43" title="43 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="57" title="57 %"></td>
            <td scope="col"></td>
            <td scope="col"><input type="radio" name ="ps" value="76" title="76 %"></td>
            <td scope="col" style ="background:#f5f1f1"></td>
            <td scope="col" style ="background:#f5f1f1"><input type="radio" name ="ps" value="100" title="100 %"></td>
          </tr>
        </tr>  
      </table>
      </div>
    </div>   
<!--***************************************** ACCOUNTABILITY div***************************************-->
<div id="accountability" style = "display:none">
  <div class="container-fluid">
    <div class="row" id="navnu2">
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
                    <p style = "text-align:left"><b>FREEDOM TO ACT</b> <span class="fa fa-arrow-down"></p>
                  </td>
                  <th colspan="4" rowspan = "3" scope="colgroup" style="width: 100px;  background:#e98f8e">
                  </br></br>0. INDETERMINATE</th>
                  <th colspan="16" scope="colgroup" style="width: 100px; background:#e98f8e">...MAGNITUDE</th>
                </tr>
                <tr>
                  <th colspan="4" scope="colgroup" style="width: 100px; background:#e98f8e">1. VERY SMALL</th>
                  <th colspan="4" scope="colgroup" style="width: 100px; background:#e98f8e">2. SMALL</th>
                  <th colspan="4" scope="colgroup" style="width: 100px; background:#e98f8e">3. MEDIUM</th>
                  <th colspan="4" scope="colgroup" style="width: 100px; background:#e98f8e">4. LARGE</th>
                </tr>
                <tr>
                  <th colspan="16" scope="colgroup" style="width: 100px;  background:#e98f8e">..IMPACT</th>
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
                  <td>Total</td>
                  <td><input type="text" id="display_ft" name="total" value="" class="form-control" readonly></td>
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
