<div id="registerCustomer" class="panel panel-primary" style="height:100%;width:100%;overflow:auto">
	<div class="panel-heading">
    	<div class="panel-title">
        	<i class="fa fa-male"></i>Upload Ebook
          <span class="pull-right" id="close">
          <i class="fa fa-close pull-right"></i></span>
        </div>
    </div>	

	<div class="panel-body">

		<form role="form" id="upload_ebook" action="../server/upload_ebook2.php" method="post" enctype="multipart/form-data">
			<div>
				
					<div class="form-group">
						<label for="reg_admin_name">Ebook Name:</label>
						<input type="text" class="form-control" id="ename"  placeholder="Enter the Ebook Title" name="ename">
					</div>

					<div class="form-group">
						<label for="reg_admin_uname">Department:</label>
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
					<div class="form-group">
						<label for="reg_admin_pword">Choose Resource Type</label>
						<select name="tresource" class="form-control" id="tresource">
                        	<option>Choose a Resource type</option>
                            <option>E-book</option>
                            <option>Video</option>
                        </select>
					</div>


					<div class="form-group">
						<label for="reg_admin_pword">Upload the file:</label>
						<input type="file" name="efile" class="form-control" id="efile" placeholder="Upload the EBook" />
					</div>
					<div class="buttonDiv">
						<button class="btn btn-primary" id="upload_ebook_btn" name="register">Upload</button>
					</div>

			</div>		
		</form>
	</div>

</div>