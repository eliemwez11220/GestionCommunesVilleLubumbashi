<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cellules Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('cellule/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Cellule Id</th>
						<th>Quartier Sid</th>
						<th>NomCellule</th>
						<th>NomChefCellule</th>
						<th>TelephoneChefCellule</th>
						<th>NombreAvenues</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>AdresseChefCellule</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cellules as $c){ ?>
                    <tr>
						<td><?php echo $c['cellule_id']; ?></td>
						<td><?php echo $c['quartier_sid']; ?></td>
						<td><?php echo $c['nomCellule']; ?></td>
						<td><?php echo $c['nomChefCellule']; ?></td>
						<td><?php echo $c['telephoneChefCellule']; ?></td>
						<td><?php echo $c['nombreAvenues']; ?></td>
						<td><?php echo $c['date_created']; ?></td>
						<td><?php echo $c['last_update']; ?></td>
						<td><?php echo $c['adresseChefCellule']; ?></td>
						<td>
                            <a href="<?php echo site_url('cellule/edit/'.$c['cellule_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('cellule/remove/'.$c['cellule_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
