<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Fip Hour Edit</h3>
            </div>
			<?php echo form_open('fip_hour/edit/'.$fip_hour['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="hours" class="control-label">Hours</label>
						<div class="form-group">
							<input type="text" name="hours" value="<?php echo ($this->input->post('hours') ? $this->input->post('hours') : $fip_hour['hours']); ?>" class="form-control" id="hours" />
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