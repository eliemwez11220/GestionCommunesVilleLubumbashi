<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quartiers Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('quartier/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Quartier Id</th>
						<th>Commune Sid</th>
						<th>NomQuartier</th>
						<th>NomChefQuatier</th>
						<th>TelephoneChefQuatier</th>
						<th>NombreCellules</th>
						<th>ContactBureauQuartier</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>AdresseChefQuatier</th>
						<th>AdresseBureauQuartier</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($quartiers as $q){ ?>
                    <tr>
						<td><?php echo $q['quartier_id']; ?></td>
						<td><?php echo $q['commune_sid']; ?></td>
						<td><?php echo $q['nomQuartier']; ?></td>
						<td><?php echo $q['nomChefQuatier']; ?></td>
						<td><?php echo $q['telephoneChefQuatier']; ?></td>
						<td><?php echo $q['nombreCellules']; ?></td>
						<td><?php echo $q['contactBureauQuartier']; ?></td>
						<td><?php echo $q['date_created']; ?></td>
						<td><?php echo $q['last_update']; ?></td>
						<td><?php echo $q['adresseChefQuatier']; ?></td>
						<td><?php echo $q['adresseBureauQuartier']; ?></td>
						<td>
                            <a href="<?php echo site_url('quartier/edit/'.$q['quartier_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('quartier/remove/'.$q['quartier_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
