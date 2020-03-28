<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fip User Add</h3>
            </div>
            <?php echo form_open('fip_user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="emp_id" class="control-label">Employee ID</label>
						<div class="form-group">
						<input type="text" name="emp_id" value="<?php echo $this->input->post('emp_id'); ?>" class="form-control" id="emp_id"/>
		
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<select name="role" class="form-control">
								<option value="">select role</option>
								<?php 
								foreach($all_fip_roles as $fip_role)
								{
									$selected = ($fip_role['id'] == $this->input->post('role')) ? ' selected="selected"' : "";

									echo '<option value="'.$fip_role['id'].'" '.$selected.'>'.$fip_role['role'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
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