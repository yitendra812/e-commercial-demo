 <link href="../css/style.css" rel="stylesheet">
 <!-- Modal -->
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">Login</h5>
        </div>
        <div class="modal-body">
		<p>Don't have an account? <a href="./signup.php">Register First</a></p>
          <form role="form" action="login_submit.php" method="POST">
            <div class="form-group">
              <input type="email" class="form-control"  name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="PASSWORD" class="form-control" placeholder="PASSWORD" name="PASSWORD" required>
            </div>
              <button type="submit" class="btn btn-primary">Login</button>
          </form>
		<br><p class="pull-left"><a href="#">FORGOT PASSWORD?</a></p><br>
        </div>
      </div>
    </div>
  </div> 
