<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="col-md-12 pt-5">
  <a href="<?php echo base_url(); ?>users/register" class="btn btn-primary btn-sm">Register</a>
  <br>
  <?php if($users<1):?>
    There are no registered users
<?php else:?>
<table class="table table-sm table-stripped">
          <tr>
              <th>User ID</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Username</th>
              <th>Level</th>
          </tr>
        <?php foreach($users as $user):?>
        <tbody>
        <tr>
          <td><?php echo $user['staffId'];?></td>
          <td><?php echo $user['firstname'];?></td>
          <td><?php echo $user['lastname'];?></td>
          <td><?php echo $user['email'];?></td>
          <td><?php echo $user['phone'];?></td>
          <td><?php echo $user['username'];?></td>
          <td><?php echo $user['level'];?></td>
        </tr>
        </tbody>
      <?php endforeach;?>
    </table>
    <?php endif;?>
  </div>