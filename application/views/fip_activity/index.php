<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fip Activity Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fip_activity/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Date</th>
						<th>Hour1</th>
						<th>Hour2</th>
						<th>Hour3</th>
						<th>Hour4</th>
						<th>Hour5</th>
						<th>Hour6</th>
						<th>Hour7</th>
						<th>Hour8</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fip_activity as $f){ ?>
                    <tr>
						<td><?php echo $f['id']; ?></td>
						<td><?php echo $f['date']; ?></td>
						<td><?php echo $f['hour1']; ?></td>
						<td><?php echo $f['hour2']; ?></td>
						<td><?php echo $f['hour3']; ?></td>
						<td><?php echo $f['hour4']; ?></td>
						<td><?php echo $f['hour5']; ?></td>
						<td><?php echo $f['hour6']; ?></td>
						<td><?php echo $f['hour7']; ?></td>
						<td><?php echo $f['hour8']; ?></td>
						<td>
                            <a href="<?php echo site_url('fip_activity/edit/'.$f['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fip_activity/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
