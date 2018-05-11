<div id="registerCustomer" class="panel panel-primary" style="height:100%;width:100%;overflow:auto">
	<div class="panel-heading">
    	<div class="panel-title">
        	<i class="fa fa-male"></i> Register New Admin
          <span class="pull-right" id="close">
          <i class="fa fa-close pull-right"></i></span>
        </div>
    </div>	

	<div class="panel-body">

		<form role="form" id="admin_reg" action="../server/reg_admin.php" method="post">
			<div>
				
					<div class="form-group">
						<label for="reg_admin_name">Name:</label>
						<input type="text" class="form-control" id="name"  placeholder="Enter Your Full Name" name="name">
					</div>

					<div class="form-group">
						<label for="reg_admin_uname">UserName:</label>
						<input type="text" name="uname" class="form-control" id="uname" placeholder="Enter Your Username" />
					</div>

					<div class="form-group">
						<label for="reg_admin_pword">Password:</label>
						<input type="password" name="pword" class="form-control" id="pword" placeholder="Enter Your Passowrd" />
					</div>
					<div>
                    	<label for="reg_admin_desg">Designation:</label>
						<input type="test" name="desg" class="form-control" id="desg" placeholder="Enter Your Designation" />
                    </div>
					<div class="buttonDiv">
						<input type="button" class="btn btn-primary" id="reg_admin_btn" name="register" value="Register Admin" />
					</div>

			</div>		
		</form>
	</div>

</div>