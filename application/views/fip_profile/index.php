<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Profile</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('fip_profile/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Employee Id</th>
						<th>Department</th>
						<th>Gender</th>
						<th>DOB</th>
						<th>Mobile No.</th>
						<th>Mail ID</th>
						<th>City</th>
						<th>Aadhaar</th>
						<th>PAN No.</th>
						<th>Bank Name</th>
						<th>Bank Accno.</th>
						<th>Bank IFSC</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($fip_profile as $f){ ?>
                    <tr>
						<td><?php echo $f['id']; ?></td>
						<td><?php echo $f['emp_id']; ?></td>
						<td><?php echo $f['dept_name']; ?></td>
						<td><?php echo $f['gender']; ?></td>
						<td><?php echo $f['dob']; ?></td>
						<td><?php echo $f['mobileno']; ?></td>
						<td><?php echo $f['mailid']; ?></td>
						<td><?php echo $f['city']; ?></td>
						<td><?php echo $f['aadhar']; ?></td>
						<td><?php echo $f['pan']; ?></td>
						<td><?php echo $f['bank_name']; ?></td>
						<td><?php echo $f['bank_accno']; ?></td>
						<td><?php echo $f['bank_ifsc']; ?></td>
						<td>
                            <a href="<?php echo site_url('fip_profile/edit/'.$f['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('fip_profile/remove/'.$f['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
