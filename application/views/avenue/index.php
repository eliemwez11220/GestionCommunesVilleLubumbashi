<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Avenues Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('avenue/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Avenue Id</th>
						<th>Cellule Sid</th>
						<th>NomAvenue</th>
						<th>NomChefAvenue</th>
						<th>TelephoneChefAvenue</th>
						<th>NombreMaisons</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>AdresseChefAvenue</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($avenues as $a){ ?>
                    <tr>
						<td><?php echo $a['avenue_id']; ?></td>
						<td><?php echo $a['cellule_sid']; ?></td>
						<td><?php echo $a['nomAvenue']; ?></td>
						<td><?php echo $a['nomChefAvenue']; ?></td>
						<td><?php echo $a['telephoneChefAvenue']; ?></td>
						<td><?php echo $a['nombreMaisons']; ?></td>
						<td><?php echo $a['date_created']; ?></td>
						<td><?php echo $a['last_update']; ?></td>
						<td><?php echo $a['adresseChefAvenue']; ?></td>
						<td>
                            <a href="<?php echo site_url('avenue/edit/'.$a['avenue_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('avenue/remove/'.$a['avenue_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
