<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fip Activity Add</h3>
            </div>
            <?php echo form_open('fip_activity/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo $this->input->post('date'); ?>" class="has-datetimepicker form-control" id="date" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hour1" class="control-label">Hour1</label>
						<div class="form-group">
							<input type="text" name="hour1" value="<?php echo $this->input->post('hour1'); ?>" class="form-control" id="hour1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hour2" class="control-label">Hour2</label>
						<div class="form-group">
							<input type="text" name="hour2" value="<?php echo $this->input->post('hour2'); ?>" class="form-control" id="hour2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hour3" class="control-label">Hour3</label>
						<div class="form-group">
							<input type="text" name="hour3" value="<?php echo $this->input->post('hour3'); ?>" class="form-control" id="hour3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hour4" class="control-label">Hour4</label>
						<div class="form-group">
							<input type="text" name="hour4" value="<?php echo $this->input->post('hour4'); ?>" class="form-control" id="hour4" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hour5" class="control-label">Hour5</label>
						<div class="form-group">
							<input type="text" name="hour5" value="<?php echo $this->input->post('hour5'); ?>" class="form-control" id="hour5" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hour6" class="control-label">Hour6</label>
						<div class="form-group">
							<input type="text" name="hour6" value="<?php echo $this->input->post('hour6'); ?>" class="form-control" id="hour6" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hour7" class="control-label">Hour7</label>
						<div class="form-group">
							<input type="text" name="hour7" value="<?php echo $this->input->post('hour7'); ?>" class="form-control" id="hour7" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="hour8" class="control-label">Hour8</label>
						<div class="form-group">
							<input type="text" name="hour8" value="<?php echo $this->input->post('hour8'); ?>" class="form-control" id="hour8" />
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