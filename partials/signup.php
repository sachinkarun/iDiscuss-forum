<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Signup to our forums</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="/forum/partials/handlesignup.php" method="post">
  <div class="form-group">
    <label for="signupemail">Username</label>
    <input type="text" class="form-control" id="signupemail" name="signupemail" aria-describedby="emailHelp">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="signuppassword">Password</label>
    <input type="password" class="form-control" id="signuppassword" name="signuppassword">
  </div>
        
  <div class="form-group">
    <label for="signupcpassword">Confirm Password</label>
    <input type="password" class="form-control" id="signupcpassword" name="signupcpassword">
  </div>

  <button type="submit" class="btn btn-success">Signup</button>
</form>
      </div>

    </div>
  </div>
</div>