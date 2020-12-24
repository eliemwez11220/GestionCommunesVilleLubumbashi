<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Affectations Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('affectation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Affectation Id</th>
						<th>Troupe Affecter</th>
						<th>NomAgent</th>
						<th>MatriculeAgent</th>
						<th>TelephoneAgent</th>
						<th>Date Affectation</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($affectations as $a){ ?>
                    <tr>
						<td><?php echo $a['affectation_id']; ?></td>
						<td><?php echo $a['troupe_affecter']; ?></td>
						<td><?php echo $a['nomAgent']; ?></td>
						<td><?php echo $a['matriculeAgent']; ?></td>
						<td><?php echo $a['telephoneAgent']; ?></td>
						<td><?php echo $a['date_affectation']; ?></td>
						<td><?php echo $a['date_created']; ?></td>
						<td><?php echo $a['last_update']; ?></td>
						<td>
                            <a href="<?php echo site_url('affectation/edit/'.$a['affectation_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('affectation/remove/'.$a['affectation_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
