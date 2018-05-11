<?php

	include("../classes/pdosetup.php");
	session_start();
	$id=$_SESSION['activeuser'];
	$sel=$db->query("SELECT * from admin where username='$id'");
	while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		$uname=$rows['username'];
		$pword=$rows['password'];
		$acess=$rows['designation'];
		$user_id=$rows['id'];
	
?>
<div id="registerCustomer" class="panel panel-primary" style="height:100%;width:100%;overflow:auto">
	<div class="panel-heading">
    	<div class="panel-title">
        	<i class="fa fa-male"></i> Admin Profile
          <span class="pull-right" id="close">
          <i class="fa fa-close pull-right"></i></span>
        </div>
    </div>	

	<div class="panel-body">
    <form role="form" id="admin_edit" action="" method="post">
			<div>
				
					<div class="form-group">
						<label for="reg_admin_uname">UserName:</label>
						<input type="text" name="uname" class="form-control" id="edit_admin_uname" placeholder="Enter Your Username" value="<?php echo $uname ?>" />
					</div>
					<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />
					<div class="form-group">
						<label for="reg_admin_pword">Password:</label>
						<input type="password" name="pword" class="form-control" id="edit_admin_pword" placeholder="Enter Your Passowrd" />
					</div>
					<div>
                    	<label for="reg_admin_access">Designation:</label>
                    	<input type="text" name="access" id="edit_admin_desg" class="form-control" />
							
                    </div>
					<div class="buttonDiv">
						<Input type="button" class="btn btn-primary" id="update_admin_btn" name="register" value="Update Admin" />
					</div>

			</div>		
		</form>
        <?php } ?>
	</div>

</div>