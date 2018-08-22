
<!-- End Body Section -->
</section>

<!-- Display modals -->
<div class="modal fade" id="PasswordModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
            <p class="modal-title">Reset Password</p>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
              <form class="form-group" id="passForm" autocomplete="off">
                <label>Current Password</label>
                <input type="password" name="currpassword" id="currpassword" value="" class="form-control" placeholder="Current Password" onblur="currpasswordVerify();">
                <div id="oldpass" class="val_error"></div>
                <label>Password</label>
                <input type="password" name="newpassword" id="newpassword" value="" class="form-control" placeholder="New Password" onblur="newpasswordVerify();">
                <div id="newpass" class="val_error"></div>
                <label>Confirm</label>
                <input type="password" name="confpassword" id="confpassword" value="" class="form-control" placeholder="Confirm Password" onblur="confpasswordVerify();">
                <div id="conpass" class="val_error"></div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" id="passBtn" onsubmit="return updatePass();" class="btn btn-outline-success">Update Password</button>
                <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            </form>
            </div>
        </div>
    </div>
  </div>
<!--Warning Message  -->
<div class="fade modal" id="warn">
 <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-warning text-light">
      <h4 class="modal-title">Warning</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body" id="warnmsg">

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-outline-success" data-dismiss="modal">Understood</button>
    </div>
 </div>
 </div>
</div>

<!-- Delete Confirmation-->
<div class="fade modal" id="deleteConf">
 <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-danger text-light">
      <h4 class="modal-title">Warning</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body" id="deletemsg">

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-outline-danger confirm" data-dismiss="modal">Delete</button>
      <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
    </div>
 </div>
 </div>
</div>

<!--Grading Results  -->
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
                <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('user_id');?>">
              </tbody>
            </table>
            </div>
        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" onclick="saveData();" data-dismiss="modal">Save Results</button>
            </form>
          <button type="button" class="btn" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="fade modal" id="editusers">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit User</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="'users/update'">
                    <div class="row">
                        <div class="col-md-5">
                            <label>Staff ID Number</label>
                            <input type="text" name="staffId" id="staffId" class="form-control form-control-sm" placeholder="ID Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Firstname</label>
                            <input type="text" name="firstname" id="firstname" class="form-control form-control-sm" placeholder="Firstname" pattern="[a-zA-Z]{3,20}$" required>
                        </div>
                        <div class="col-md-4">
                            <label>Lastname</label>
                            <input type="text" name="lastname" id="lastname" class="form-control form-control-sm" placeholder="Lastname" pattern="[a-zA-Z]{3,20}$" required>
                        </div>
                        <div class="col-md-4">
                            <label>Access Level:</label>
                              <select name="level" id="level" class="form-control form-control-sm">
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                              </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <label>Email</label>
                            <input type="email" name="email" id="email" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-4">
                            <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control form-control-sm">
                            <input type="hidden" id="userid">
                        </div>
                    </div>
                </form>
            </div>
        <div class="modal-footer">
            <button type="button" id="userUpt" class="btn btn-outline-success" data-dismiss="modal">Update</button>
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Exit</button>
        </div>
    </div>
 </div>
</div>

<footer class="footer text-secondary text-center fixed-bottom">
<p class="footer pull-center">Copy Rights  <strong>&copy; </strong><?php echo date('Y').' UETCL'?></p>
</footer>
<!-- Assets -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>
