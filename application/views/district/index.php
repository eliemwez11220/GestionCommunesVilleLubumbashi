<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Districts Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('district/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>District Id</th>
						<th>Quartier Sid</th>
						<th>NomDistrict</th>
						<th>NomResponsable</th>
						<th>TelephoneResponsable</th>
						<th>NombreTroupes</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($districts as $d){ ?>
                    <tr>
						<td><?php echo $d['district_id']; ?></td>
						<td><?php echo $d['quartier_sid']; ?></td>
						<td><?php echo $d['nomDistrict']; ?></td>
						<td><?php echo $d['nomResponsable']; ?></td>
						<td><?php echo $d['telephoneResponsable']; ?></td>
						<td><?php echo $d['nombreTroupes']; ?></td>
						<td><?php echo $d['date_created']; ?></td>
						<td><?php echo $d['last_update']; ?></td>
						<td>
                            <a href="<?php echo site_url('district/edit/'.$d['district_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('district/remove/'.$d['district_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
