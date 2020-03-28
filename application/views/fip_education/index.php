<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Education Details</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fip_education/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
						<th>ID</th>
						<th>Employee ID</th>
						<th>SSC Percentage</th>
						<th>SSC Passing Year</th>
						<th>SSC Institute</th>
						<th>Inter Percentage</th>
						<th>Inter Passing Year</th>
						<th>Inter Institute</th>
						<th>UG Percentage</th>
						<th>UG Passing Year</th>
						<th>UG Institute</th>
						<th>PG Percentage</th>
						<th>PG Passing Year</th>
						<th>PG Institute</th>
						<th>PHD Year</th>
						<th>PHD Institute</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fip_education as $f){ ?>
                    <tr>
						<td><?php echo $f['id']; ?></td>
						<td><?php echo $f['emp_id']; ?></td>
						<td><?php echo $f['ssc_percentage']; ?></td>
						<td><?php echo $f['ssc_passing_year']; ?></td>
						<td><?php echo $f['ssc_institute']; ?></td>
						<td><?php echo $f['inter_percentage']; ?></td>
						<td><?php echo $f['inter_passing_year']; ?></td>
						<td><?php echo $f['inter_institute']; ?></td>
						<td><?php echo $f['ug_percentage']; ?></td>
						<td><?php echo $f['ug_passing_year']; ?></td>
						<td><?php echo $f['ug_institute']; ?></td>
						<td><?php echo $f['pg_percentage']; ?></td>
						<td><?php echo $f['pg_passing_year']; ?></td>
						<td><?php echo $f['pg_institute']; ?></td>
						<td><?php echo $f['phd_year']; ?></td>
						<td><?php echo $f['phd_institute']; ?></td>
						<td>
                            <a href="<?php echo site_url('fip_education/edit/'.$f['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fip_education/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
