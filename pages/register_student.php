<div id="registerCustomer" class="panel panel-primary" style="height:100%;width:100%;overflow:auto">
	<div class="panel-heading">
    	<div class="panel-title">
        	<i class="fa fa-male"></i> Register New Student
          <span class="pull-right" id="close">
          <i class="fa fa-close pull-right"></i></span>
        </div>
    </div>	

	<div class="panel-body">

		<form role="form" id="student_reg" action="" method="post">
			<div>
				
					<div class="form-group">
						<label for="reg_admin_name">Surname:</label>
						<input type="text" class="form-control" id="name"  placeholder="Enter Your Surname" name="name">
					</div>

					<div class="form-group">
						<label for="reg_admin_uname">Othernames:</label>
						<input type="text" name="onames" class="form-control" id="onames" placeholder="Enter Your Othernames" />
					</div>

					<div class="form-group">
						<label for="reg_admin_pword">matric:</label>
						<input type="text" name="matric" class="form-control" id="matric" placeholder="Enter Your Matric o" />
					</div>
					<div>
                    	<label for="reg_admin_desg">Department:</label>
						<select name="dpt" class="form-control" id="dpt">
							<option>Select your Department</option>
                        	<option>Accountancy</option>
                            <option>Banking and Finance</option>
                            <option>Building Technology</option>
                            <option>Business Administration</option>
                            <option>Computer Enginnering</option>
                            <option>Computer Science</option>
                            <option>Electrical Electronic</option>
                            <option>Geology</option>
							<option>Hospital Liesure and Torism</option>
                            <option>Mechanical ENginnering</option>
                            <option>Nurition and Diebities</option>
                            <option>Office Technology Management</option>
                            <option>Statistics</option>
                            <option>Survey and Geoformistics</option>
	                        <option>Science Laboratory Technology</option>
                        </select>
                    </div>
                    <div>
                    	<label for="reg_admin_desg">Level:</label>
						<select name="lvl" id="lvl" class="form-control">
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
                    	<label for="reg_admin_desg">Phone no:</label>
						<input type="test" name="phone" class="form-control" id="phoneno" placeholder="Enter Phoneno" />
                    </div>
                    <div>
                    	<label for="reg_admin_desg">Email:</label>
						<input type="test" name="email" class="form-control" id="email" placeholder="Enter Your Email Address" />
                    </div>
                    <div>
                    	<label for="reg_admin_desg">Session:</label>
						<select name="sess" class="form-control" id="sess">
                        	<option>Select the Academic Session</option>
                            <option>2012/2013
                            <option>2013/2014</option>
                            <option>2014/2015</option>
                            <option>2015/2016</option>
                        </select>
                    </div>
                    <div class="buttonDiv">
				<input type="button" class="btn btn-primary" id="reg_student_btn" name="reg_student_btn" value="Register Student" />
					</div>

			</div>		
		</form>
	</div>

</div>