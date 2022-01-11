<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to our forums</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <form action="/forum/partials/handlelogin.php" method="post">
  <div class="form-group">
    <label for="loginemail">Username</label>
    <input type="text" class="form-control" id="loginemail" name="loginemail" aria-describedby="emailHelp">
    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
  <div class="form-group">
    <label for="loginpassword">Password</label>
    <input type="password" class="form-control" id="loginpassword" name="loginpassword">
  </div>
        
  <button type="submit" class="btn btn-success">Submit</button>
</form>
      </div>

    </div>
  </div>
</div>