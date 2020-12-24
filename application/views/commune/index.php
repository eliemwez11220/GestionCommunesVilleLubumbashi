<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Communes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('commune/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Commune Id</th>
						<th>NomCommune</th>
						<th>NomBourgmestre</th>
						<th>TelephoneBourgmestre</th>
						<th>NombreQuartiers</th>
						<th>ContactBureau</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>AdresseBourgmestre</th>
						<th>AdresseBureau</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($communes as $c){ ?>
                    <tr>
						<td><?php echo $c['commune_id']; ?></td>
						<td><?php echo $c['nomCommune']; ?></td>
						<td><?php echo $c['nomBourgmestre']; ?></td>
						<td><?php echo $c['telephoneBourgmestre']; ?></td>
						<td><?php echo $c['nombreQuartiers']; ?></td>
						<td><?php echo $c['contactBureau']; ?></td>
						<td><?php echo $c['date_created']; ?></td>
						<td><?php echo $c['last_update']; ?></td>
						<td><?php echo $c['adresseBourgmestre']; ?></td>
						<td><?php echo $c['adresseBureau']; ?></td>
						<td>
                            <a href="<?php echo site_url('commune/edit/'.$c['commune_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('commune/remove/'.$c['commune_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
