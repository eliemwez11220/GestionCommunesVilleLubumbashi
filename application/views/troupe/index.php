<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Troupes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('troupe/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Troupe Id</th>
						<th>District Sid</th>
						<th>NomTroupe</th>
						<th>NomResponsable</th>
						<th>TelephoneResponsable</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($troupes as $t){ ?>
                    <tr>
						<td><?php echo $t['troupe_id']; ?></td>
						<td><?php echo $t['district_sid']; ?></td>
						<td><?php echo $t['nomTroupe']; ?></td>
						<td><?php echo $t['nomResponsable']; ?></td>
						<td><?php echo $t['telephoneResponsable']; ?></td>
						<td><?php echo $t['date_created']; ?></td>
						<td><?php echo $t['last_update']; ?></td>
						<td>
                            <a href="<?php echo site_url('troupe/edit/'.$t['troupe_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('troupe/remove/'.$t['troupe_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
