	
	<div class="modal fade" id="loginmodel" role="dialog">
    <div class="modal-dialog modal-sm-4">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
			<form id="login" class="form-horizontal" method="POST" action="login_validation.php">
				<div class="form-group">
					<label class="col-sm-3 control-label" for="email">Email:</label>
					<div class="col-sm-8">
						<input class="form-control" name="useremail" id="email" type="email" required>
					</div>
					<span class="error" ></span>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label" for="password">Password:</label>
					<div class="col-sm-8">
						<input class="form-control" type="password"  name="password" required id="password">

						<a  href="recover_email.php" style="cursor: pointer;margin-left:60%;color: red">forget password?</a>
					</div>
				</div>
				<div class="form-group">
				<div class="col-sm-4"></div>
				<div class="col-sm-4">
				<button type="submit" class="btn btn-success" id="submit" >Login</button>
				<button type="reset" class="btn btn-submit" id="reset" >Reset</button>
				</div></div>
			</form>
		</div>
        
        </div>
      </div>
    </div>


	
