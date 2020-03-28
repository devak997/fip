<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fip Workhour Add</h3>
            </div>
            <?php echo form_open('fip_workhour/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="emp_id" class="control-label">Emp Id</label>
						<div class="form-group">
							<input type="text" name="emp_id" value="<?php echo $this->input->post('emp_id'); ?>" class="form-control" id="emp_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="login" class="control-label">Login</label>
						<div class="form-group">
							<input type="text" name="login" value="<?php echo $this->input->post('login'); ?>" class="has-datetimepicker form-control" id="login" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="logout" class="control-label">Logout</label>
						<div class="form-group">
							<input type="text" name="logout" value="<?php echo $this->input->post('logout'); ?>" class="has-datetimepicker form-control" id="logout" />
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