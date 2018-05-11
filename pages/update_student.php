<?php

	include("../classes/pdosetup.php");
	session_start();
	$id=$_SESSION['activeuser'];
	$sel=$db->query("SELECT * from student where username='$id'");
	while($rows=$sel-> fetch (PDO::FETCH_ASSOC)){
		$sname=$rows['surname'];
		$onames=$rows['othernames'];
		$level=$rows['level'];
		$phoneno=$rows['phoneno'];
		$email=$rows['email'];
		$user_id=$rows['id'];
	
?>
<div id="registerCustomer" class="panel panel-primary" style="height:100%;width:100%;overflow:auto">
	<div class="panel-heading">
    	<div class="panel-title">
        	<i class="fa fa-male"></i> Edit Student Data
          <span class="pull-right" id="close">
          <i class="fa fa-close pull-right"></i></span>
        </div>
    </div>	

	<div class="panel-body">
    <form role="form" id="student_edit" action="" method="post">
			<div>
				<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id; ?>" />			
					<div>
                    	<label for="reg_admin_access">Level:</label>
        				<select name="lvl" id="edit_student_lvl" class="form-control">
                        	<option>Select Your Level</option>
                            <option>ND1 FT</option>
                            <option>ND1 DPT</option>
                            <option>NDYR1 PT</option>
                            <option>NDYR2 PT</option>
                            <option>ND2 FT</option>
                            <option>ND2 DPT</option>
                            <option>NDYR3 PT</option>
                            <option>HND1 FT</option>
                            <option>HND2 FT</option>
                        </select>
							
                    </div>
                    <div>
                    	<label for="reg_admin_access">Phone no:</label>
                    	<input type="text" name="phoneno" id="edit_student_phoneno" placeholder="Enter your Phone no" value="<?php echo $phoneno; ?>" class="form-control" />
							
                    </div>
                    <div>
                    	<label for="reg_admin_access">Email:</label>
                    	<input type="text" name="email" id="edit_student_email" placeholder="Enter your email" value="<?php echo $email; ?>" class="form-control" />
							
                    </div>
					<div class="buttonDiv">
						<Input type="button" class="btn btn-primary" id="update_Student_record_btn" name="register" value="Update Student Record" />
					</div>

			</div>		
		</form>
        <?php } ?>
	</div>

</div>