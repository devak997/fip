<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Profile</h3>
            </div>
			<?php echo form_open('fip_profile/edit/'.$fip_profile['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="emp_id" class="control-label"><span class="text-danger">*</span>Employee Id</label>
						<div class="form-group">
							<input type="text" name="emp_id" value="<?php echo ($this->input->post('emp_id') ? $this->input->post('emp_id') : $fip_profile['emp_id']); ?>" class="form-control" id="emp_id" />
							<span class="text-danger"><?php echo form_error('emp_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dept" class="control-label"><span class="text-danger">*</span>Department</label>
						<div class="form-group">
							<select name="dept" class="form-control">
								<option value="">Select Department</option>
								<?php 
								foreach($all_fip_dept as $fip_dept)
								{
									$selected = ($fip_dept['id'] == $fip_profile['dept']) ? ' selected="selected"' : "";

									echo '<option value="'.$fip_dept['id'].'" '.$selected.'>'.$fip_dept['dept_name'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="gender" class="control-label"><span class="text-danger">*</span>Gender</label>
						<div class="form-group">
							<select name="gender" class="form-control">
								<option value="">Select Gender</option>
								<?php 
								$gender_values = array(
									'M'=>'Male',
									'F'=>'Female',
								);

								foreach($gender_values as $value => $display_text)
								{
									$selected = ($value == $fip_profile['gender']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('gender');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dob" class="control-label"><span class="text-danger">*</span>DOB</label>
						<div class="form-group">
							<input type="text" name="dob" value="<?php echo ($this->input->post('dob') ? $this->input->post('dob') :implode('/', array_reverse(explode('-', $fip_profile['dob'])))); ?>" class="has-datepicker form-control" id="dob" />
							<span class="text-danger"><?php echo form_error('dob');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobileno" class="control-label"><span class="text-danger">*</span>Mobile No.</label>
						<div class="form-group">
							<input type="text" name="mobileno" value="<?php echo ($this->input->post('mobileno') ? $this->input->post('mobileno') : $fip_profile['mobileno']); ?>" class="form-control" id="mobileno" />
							<span class="text-danger"><?php echo form_error('mobileno');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mailid" class="control-label"><span class="text-danger">*</span>Mail ID</label>
						<div class="form-group">
							<input type="text" name="mailid" value="<?php echo ($this->input->post('mailid') ? $this->input->post('mailid') : $fip_profile['mailid']); ?>" class="form-control" id="mailid" />
							<span class="text-danger"><?php echo form_error('mailid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label"><span class="text-danger">*</span>City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $fip_profile['city']); ?>" class="form-control" id="city" />
							<span class="text-danger"><?php echo form_error('city');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="aadhar" class="control-label"><span class="text-danger">*</span>Aadhaar</label>
						<div class="form-group">
							<input type="text" name="aadhar" value="<?php echo ($this->input->post('aadhar') ? $this->input->post('aadhar') : $fip_profile['aadhar']); ?>" class="form-control" id="aadhar" />
							<span class="text-danger"><?php echo form_error('aadhar');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pan" class="control-label"><span class="text-danger">*</span>PAN No.</label>
						<div class="form-group">
							<input type="text" name="pan" value="<?php echo ($this->input->post('pan') ? $this->input->post('pan') : $fip_profile['pan']); ?>" class="form-control" id="pan" />
							<span class="text-danger"><?php echo form_error('pan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_name" class="control-label"><span class="text-danger">*</span>Bank Name</label>
						<div class="form-group">
							<input type="text" name="bank_name" value="<?php echo ($this->input->post('bank_name') ? $this->input->post('bank_name') : $fip_profile['bank_name']); ?>" class="form-control" id="bank_name" />
							<span class="text-danger"><?php echo form_error('bank_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_accno" class="control-label"><span class="text-danger">*</span>Bank Accno.</label>
						<div class="form-group">
							<input type="text" name="bank_accno" value="<?php echo ($this->input->post('bank_accno') ? $this->input->post('bank_accno') : $fip_profile['bank_accno']); ?>" class="form-control" id="bank_accno" />
							<span class="text-danger"><?php echo form_error('bank_accno');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_ifsc" class="control-label"><span class="text-danger">*</span>Bank IFSC</label>
						<div class="form-group">
							<input type="text" name="bank_ifsc" value="<?php echo ($this->input->post('bank_ifsc') ? $this->input->post('bank_ifsc') : $fip_profile['bank_ifsc']); ?>" class="form-control" id="bank_ifsc" />
							<span class="text-danger"><?php echo form_error('bank_ifsc');?></span>
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