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
<p class="footer pull-center">Copy Rights  <strong>&copy; </strong><?php echo date('Y').' UETCL'?></p>
</footer>
<!-- Assets -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Custom Script -->
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</body>
</html>