<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Educational Details</h3>
            </div>
			<?php echo form_open('fip_education/edit/'.$fip_education['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="profile_id" class="control-label"><span class="text-danger">*</span>Profile ID</label>
						<div class="form-group">
							<input type="text" name="profile_id" value="<?php echo ($this->input->post('profile_id') ? $this->input->post('profile_id') : $fip_education['profile_id']); ?>" class="form-control" id="profile_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ssc_percentage" class="control-label"><span class="text-danger">*</span>SSC Percentage</label>
						<div class="form-group">
							<input type="text" name="ssc_percentage" value="<?php echo ($this->input->post('ssc_percentage') ? $this->input->post('ssc_percentage') : $fip_education['ssc_percentage']); ?>" class="form-control" id="ssc_percentage" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ssc_passing_year" class="control-label"><span class="text-danger">*</span>SSC Passing Year</label>
						<div class="form-group">
							<input type="text" name="ssc_passing_year" value="<?php echo ($this->input->post('ssc_passing_year') ? $this->input->post('ssc_passing_year') : $fip_education['ssc_passing_year']); ?>" class="form-control" id="ssc_passing_year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ssc_institute" class="control-label"><span class="text-danger">*</span>SSC Institute</label>
						<div class="form-group">
							<input type="text" name="ssc_institute" value="<?php echo ($this->input->post('ssc_institute') ? $this->input->post('ssc_institute') : $fip_education['ssc_institute']); ?>" class="form-control" id="ssc_institute" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="inter_percentage" class="control-label"><span class="text-danger">*</span>Inter/Polytechnic Percentage</label>
						<div class="form-group">
							<input type="text" name="inter_percentage" value="<?php echo ($this->input->post('inter_percentage') ? $this->input->post('inter_percentage') : $fip_education['inter_percentage']); ?>" class="form-control" id="inter_percentage" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="inter_passing_year" class="control-label"><span class="text-danger">*</span>Inter/Polytechnic Passing Year</label>
						<div class="form-group">
							<input type="text" name="inter_passing_year" value="<?php echo ($this->input->post('inter_passing_year') ? $this->input->post('inter_passing_year') : $fip_education['inter_passing_year']); ?>" class="form-control" id="inter_passing_year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="inter_institute" class="control-label"><span class="text-danger">*</span>Inter/Polytechnic Institute</label>
						<div class="form-group">
							<input type="text" name="inter_institute" value="<?php echo ($this->input->post('inter_institute') ? $this->input->post('inter_institute') : $fip_education['inter_institute']); ?>" class="form-control" id="inter_institute" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ug_percentage" class="control-label"><span class="text-danger">*</span>UG Percentage</label>
						<div class="form-group">
							<input type="text" name="ug_percentage" value="<?php echo ($this->input->post('ug_percentage') ? $this->input->post('ug_percentage') : $fip_education['ug_percentage']); ?>" class="form-control" id="ug_percentage" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ug_passing_year" class="control-label"><span class="text-danger">*</span>UG Passing Year</label>
						<div class="form-group">
							<input type="text" name="ug_passing_year" value="<?php echo ($this->input->post('ug_passing_year') ? $this->input->post('ug_passing_year') : $fip_education['ug_passing_year']); ?>" class="form-control" id="ug_passing_year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ug_institute" class="control-label"><span class="text-danger">*</span>UG Institute</label>
						<div class="form-group">
							<input type="text" name="ug_institute" value="<?php echo ($this->input->post('ug_institute') ? $this->input->post('ug_institute') : $fip_education['ug_institute']); ?>" class="form-control" id="ug_institute" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pg_percentage" class="control-label">PG Percentage</label>
						<div class="form-group">
							<input type="text" name="pg_percentage" value="<?php echo ($this->input->post('pg_percentage') ? $this->input->post('pg_percentage') : $fip_education['pg_percentage']); ?>" class="form-control" id="pg_percentage" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pg_passing_year" class="control-label">PG Passing Year</label>
						<div class="form-group">
							<input type="text" name="pg_passing_year" value="<?php echo ($this->input->post('pg_passing_year') ? $this->input->post('pg_passing_year') : $fip_education['pg_passing_year']); ?>" class="form-control" id="pg_passing_year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="pg_institute" class="control-label">PG Institute</label>
						<div class="form-group">
							<input type="text" name="pg_institute" value="<?php echo ($this->input->post('pg_institute') ? $this->input->post('pg_institute') : $fip_education['pg_institute']); ?>" class="form-control" id="pg_institute" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phd_year" class="control-label">PHD Passing Year</label>
						<div class="form-group">
							<input type="text" name="phd_year" value="<?php echo ($this->input->post('phd_year') ? $this->input->post('phd_year') : $fip_education['phd_year']); ?>" class="form-control" id="phd_year" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="phd_institute" class="control-label">PHD Institute</label>
						<div class="form-group">
							<input type="text" name="phd_institute" value="<?php echo ($this->input->post('phd_institute') ? $this->input->post('phd_institute') : $fip_education['phd_institute']); ?>" class="form-control" id="phd_institute" />
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