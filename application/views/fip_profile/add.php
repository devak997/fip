<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Profile</h3>
            </div>
            <?php echo form_open('fip_profile/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="emp_id" class="control-label">Employee ID</label>
						<div class="form-group">
							<input type="text" name="emp_id" value="<?php echo $this->input->post('emp_id'); ?>" class="form-control" id="emp_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dept" class="control-label">Department</label>
						<div class="form-group">
							<input type="text" name="dept" value="<?php echo $this->input->post('dept'); ?>" class="form-control" id="dept" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dob" class="control-label">DOB</label>
						<div class="form-group">
							<input type="text" name="dob" value="<?php echo $this->input->post('dob'); ?>" class="has-datepicker form-control" id="dob" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label">Gender</label>
						<div class="form-group">
							<input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" class="form-control" id="gender" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobileno" class="control-label">Mobile No.</label>
						<div class="form-group">
							<input type="text" name="mobileno" value="<?php echo $this->input->post('mobileno'); ?>" class="form-control" id="mobileno" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mailid" class="control-label">Mail ID</label>
						<div class="form-group">
							<input type="text" name="mailid" value="<?php echo $this->input->post('mailid'); ?>" class="form-control" id="mailid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label">City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo $this->input->post('city'); ?>" class="form-control" id="city" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="aadhar" class="control-label">Aadhaar</label>
						<div class="form-group">
							<input type="text" name="aadhar" value="<?php echo $this->input->post('aadhar'); ?>" class="form-control" id="aadhar" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pan" class="control-label">PAN No.</label>
						<div class="form-group">
							<input type="text" name="pan" value="<?php echo $this->input->post('pan'); ?>" class="form-control" id="pan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_name" class="control-label">Bank Name</label>
						<div class="form-group">
							<input type="text" name="bank_name" value="<?php echo $this->input->post('bank_name'); ?>" class="form-control" id="bank_name" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_accno" class="control-label">Bank Accno.</label>
						<div class="form-group">
							<input type="text" name="bank_accno" value="<?php echo $this->input->post('bank_accno'); ?>" class="form-control" id="bank_accno" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_ifsc" class="control-label">Bank IFSC</label>
						<div class="form-group">
							<input type="text" name="bank_ifsc" value="<?php echo $this->input->post('bank_ifsc'); ?>" class="form-control" id="bank_ifsc" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>