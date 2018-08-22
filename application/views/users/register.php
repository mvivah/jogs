<div class="container" style="margin-top: 4rem;">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6">
              <div class="card shadow">
                  <div class="card-header bg-primary text-white">
                      Account Details
                    <i class="far fa-user-circle" aria-hidden="true" style="float:right;"></i>
                  </div>
                <div class="card-body">
                <?php echo validation_errors();?>
                <?php echo form_open('users/register');?>
                <div class="row">
                    <div class="col-md-5">
                        <label>Staff ID Number</label>
                        <input type="text" name="staffId" class="form-control form-control-sm" placeholder="ID Number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Firstname</label>
                        <input type="text" name="firstname" class="form-control form-control-sm" placeholder="Firstname" pattern="[a-zA-Z]{3,20}$" required>
                    </div>
                    <div class="col-md-4">
                        <label>Lastname</label>
                        <input type="text" name="lastname" class="form-control form-control-sm" placeholder="Lastname" pattern="[a-zA-Z]{3,20}$" required>
                    </div>
                    <div class="col-md-4">
                        <label>Access Level:</label>
                        <select name="level"  class="form-control form-control-sm">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-8">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control form-control-sm">
                    </div>
                    <div class="col-md-4">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control form-control-sm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Mobile Phone</label>
                        <input type="text" name="phone" class="form-control form-control-sm" placeholder="0712345679" required>
                    </div>
                    <div class="col-md-4">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control form-control-sm">
                    </div>

                    <div class="col-md-4">
                        <label>Confirm Password</label>
                        <input type="password" name="password2" class="form-control form-control-sm">
                    </div>
                </div>
            <br>
            <div class="row">
            <div class="col-md-6"></div>
                <div class="col-md-6 style="float:right;"">
                    <input type="submit" name="submit" value="Save Details" class="btn btn-outline-primary">
                    <input type="reset" class="btn  btn-outline-secondary" data-dismiss="modal" value="Cancel">
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3"></div>
        <?php echo form_close();?>
    </div>
