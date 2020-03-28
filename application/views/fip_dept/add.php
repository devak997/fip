<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Department</h3>
            </div>
            <?php echo form_open('fip_dept/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="dept_name" class="control-label">Department Name</label>
						<div class="form-group">
							<input type="text" name="dept_name" value="<?php echo $this->input->post('dept_name'); ?>" class="form-control" id="dept_name" />
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