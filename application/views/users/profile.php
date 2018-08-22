<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container" style="margin-top: 4rem;">
  <div class="row">
    <div class="col-md-12">
      <?php
      if(!$this->session->userdata('level')=='Admin')
      				{
      						redirect('login');
            }?>
  </div>
</div>
<div class="row">
  <div class="col-md-3">
  </div>
      <div class="col-md-6">
          <div class="card shadow">
              <div class="card-header bg-primary text-white">
                  Your account information
                <i class="far fa-user-circle" aria-hidden="true" style="float:right;"></i>
              </div>
            <div class="card-body">
                <form class="form-group" id="profileForm" onsubmit="return updateProfile();" autocomplete="off">
                  <div class="row">
                    <div class="col-md-4">
                        <label>Firstname</label>
                        <input type="text" name="firstname" id="firstname" value="<?php echo $this->session->userdata('firstname');?>" class="form-control" >
                    </div>
                    <div class="col-md-4">
                      <label>Lastname</label>
                      <input type="text" name="lastname" id="lastname" value="<?php echo $this->session->userdata('lastname');?>" class="form-control">
                    </div>
                    <div class="col-md-4">
                      <label>Username</label>
                      <input type="text" name="username" id="username" value="<?php echo $this->session->userdata('username');?>" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4">
                      <label>Mobile Phone</label>
                      <input type="text" name="mobilePhone" id="mobilePhone" value="<?php echo $this->session->userdata('phone');?>" class="form-control">
                    </div>
                    <div class="col-md-8">
                      <label>Email</label>
                      <input type="email" name="email" id="email" value="<?php echo $this->session->userdata('email');?>" class="form-control">
                    </div>
                  </div>
                    <br>
                  <div style="overflow: auto; padding: 0 0 10px 0">
                    <button type="submit" class="btn btn-outline-success pull-right"><i class="fa fa-check"></i> Save changes</button>
                    <button type="button" class="btn btn-outline-danger pull-right"data-toggle="modal" data-target="#PasswordModal">
                      <i class="fa fa-lock"></i> Reset Password
                    </button>
                  </div>
                </form>
            </div>
          </div>
      </div>
    </div>
</div>
