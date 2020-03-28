<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All Departments</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fip_dept/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered">
                    <tr>
						<th>ID</th>
						<th>Department Name</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fip_dept as $f){ ?>
                    <tr>
						<td><?php echo $f['id']; ?></td>
						<td><?php echo $f['dept_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('fip_dept/edit/'.$f['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fip_dept/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
