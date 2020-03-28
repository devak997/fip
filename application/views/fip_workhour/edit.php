<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fip Workhour Edit</h3>
            </div>
			<?php echo form_open('fip_workhour/edit/'.$fip_workhour['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="emp_id" class="control-label">Emp Id</label>
						<div class="form-group">
							<input type="text" name="emp_id" value="<?php echo ($this->input->post('emp_id') ? $this->input->post('emp_id') : $fip_workhour['emp_id']); ?>" class="form-control" id="emp_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="login" class="control-label">Login</label>
						<div class="form-group">
							<input type="text" name="login" value="<?php echo ($this->input->post('login') ? $this->input->post('login') : $fip_workhour['login']); ?>" class="has-datetimepicker form-control" id="login" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="logout" class="control-label">Logout</label>
						<div class="form-group">
							<input type="text" name="logout" value="<?php echo ($this->input->post('logout') ? $this->input->post('logout') : $fip_workhour['logout']); ?>" class="has-datetimepicker form-control" id="logout" />
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