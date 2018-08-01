<h2><?=$title;?></h2>

<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php echo validation_errors();?>
            <?php echo form_open('users/register');?>
            <div class="row">
                <div class="col-md-4">
                    <label>Staff ID Number</label>
                    <input type="text" name="staffId" class="form-control" placeholder="ID Number" required>
                </div>
                <div class="col-md-4">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Firstname" pattern="[a-zA-Z]{3,20}$" required>
                </div>
                <div class="col-md-4">
                    <label>Lastname</label>
                    <input type="text" name="lastname" class="form-control" placeholder="Lastname" pattern="[a-zA-Z]{3,20}$" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="username@ahcul.com" required>
                </div>
                <div class="col-md-4">
                    <label>Mobile Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="0712345679" required>
                </div>
                <div class="col-md-4">
                    <label>Level / Role:</label>
                    <select name="level"  class="form-control">                            
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="col-md-3">
                    <label>Confirm Password</label>
                    <input type="password" name="password2" class="form-control">
                </div>
            </div>
        <br>
        <div class="row">
            <div class="col-md-3" style="float:right;">
                <input type="submit" name="submit" value="Save" class="btn btn-outline-danger">
                <input type="reset" class="btn  btn-outline-secondary" data-dismiss="modal" value="Cancel">
            </div>
        </div>
    </div>
    <?php echo form_close();?>
</div>