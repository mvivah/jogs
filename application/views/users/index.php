<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container shadow" style="margin-top: 4rem;">
  <div class="row">
    <?php if($this->session->userdata('level')=='Admin'):?>
    <div class="col-md-4 mt-2">
      <p><a href="<?php echo base_url(); ?>users/register" class="btn btn-primary btn-sm">Register</a></p>
    </div>
  </div>
      <?php endif;?>
  <div class="row">
    <div class="col-md-12">
      <?php if($users<1):?>
        There are no registered users
        <?php else:?>
        <table class="table table-sm table-bordered" id="tables">
          <thead>
            <tr>
              <th>User ID</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Username</th>
              <th>Level</th>
              <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($users as $user):?>
            <tr>
              <td><?php echo $user['staffId'];?></td>
              <td><?php echo $user['firstname'];?></td>
              <td><?php echo $user['lastname'];?></td>
              <td><?php echo $user['email'];?></td>
              <td><?php echo $user['phone'];?></td>
              <td><?php echo $user['username'];?></td>
              <td><?php echo $user['level'];?></td>
              <td>
                <span class='fa fa-edit editUser' id="<?php echo $user['id'];?>" title="Edit User"></span>
                <span class='fa fa-trash text-danger  delUser' id="<?php echo $user['id'];?>" title="Delete User"></span>
              </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
    <?php endif;?>
    <br>
  </div>
</div>
