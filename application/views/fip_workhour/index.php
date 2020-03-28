<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Fip Workhours Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fip_workhour/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Emp Id</th>
						<th>Login</th>
						<th>Logout</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fip_workhours as $f){ ?>
                    <tr>
						<td><?php echo $f['id']; ?></td>
						<td><?php echo $f['emp_id']; ?></td>
						<td><?php echo $f['login']; ?></td>
						<td><?php echo $f['logout']; ?></td>
						<td>
                            <a href="<?php echo site_url('fip_workhour/edit/'.$f['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fip_workhour/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
