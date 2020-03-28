<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fip Assign Activity Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fip_assign_activity/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Emp Id</th>
						<th>Date</th>
						<th>Task Desc</th>
						<th>Task Comp Date</th>
						<th>Task Assigned By</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fip_assign_activity as $f){ ?>
                    <tr>
						<td><?php echo $f['id']; ?></td>
						<td><?php echo $f['emp_id']; ?></td>
						<td><?php echo $f['date']; ?></td>
						<td><?php echo $f['task_desc']; ?></td>
						<td><?php echo $f['task_comp_date']; ?></td>
						<td><?php echo $f['task_assigned_by']; ?></td>
						<td>
                            <a href="<?php echo site_url('fip_assign_activity/edit/'.$f['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fip_assign_activity/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
