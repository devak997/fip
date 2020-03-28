<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fip Assign Activity Edit</h3>
            </div>
			<?php echo form_open('fip_assign_activity/edit/'.$fip_assign_activity['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="emp_id" class="control-label">Emp Id</label>
						<div class="form-group">
							<input type="text" name="emp_id" value="<?php echo ($this->input->post('emp_id') ? $this->input->post('emp_id') : $fip_assign_activity['emp_id']); ?>" class="form-control" id="emp_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $fip_assign_activity['date']); ?>" class="has-datepicker form-control" id="date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="task_desc" class="control-label">Task Desc</label>
						<div class="form-group">
							<input type="text" name="task_desc" value="<?php echo ($this->input->post('task_desc') ? $this->input->post('task_desc') : $fip_assign_activity['task_desc']); ?>" class="form-control" id="task_desc" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="task_comp_date" class="control-label">Task Comp Date</label>
						<div class="form-group">
							<input type="text" name="task_comp_date" value="<?php echo ($this->input->post('task_comp_date') ? $this->input->post('task_comp_date') : $fip_assign_activity['task_comp_date']); ?>" class="has-datetimepicker form-control" id="task_comp_date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="task_assigned_by" class="control-label">Task Assigned By</label>
						<div class="form-group">
							<input type="text" name="task_assigned_by" value="<?php echo ($this->input->post('task_assigned_by') ? $this->input->post('task_assigned_by') : $fip_assign_activity['task_assigned_by']); ?>" class="form-control" id="task_assigned_by" />
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