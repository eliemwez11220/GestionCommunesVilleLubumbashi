<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Demandesactesmariages Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('demandesactesmariage/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Demande Id</th>
						<th>NomHomme</th>
						<th>NomFemme</th>
						<th>NomTemoin</th>
						<th>TelephoneCouple</th>
						<th>TelephoneTemoin</th>
						<th>TerritoireOrigineCouple</th>
						<th>VilleResidenceCouple</th>
						<th>Date Ceremonie</th>
						<th>Heure Ceremonie</th>
						<th>Frais Ceremonie</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>OfficierCommune</th>
						<th>AdresseCouple</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($demandesactesmariages as $d){ ?>
                    <tr>
						<td><?php echo $d['demande_id']; ?></td>
						<td><?php echo $d['nomHomme']; ?></td>
						<td><?php echo $d['nomFemme']; ?></td>
						<td><?php echo $d['nomTemoin']; ?></td>
						<td><?php echo $d['telephoneCouple']; ?></td>
						<td><?php echo $d['telephoneTemoin']; ?></td>
						<td><?php echo $d['territoireOrigineCouple']; ?></td>
						<td><?php echo $d['villeResidenceCouple']; ?></td>
						<td><?php echo $d['date_ceremonie']; ?></td>
						<td><?php echo $d['heure_ceremonie']; ?></td>
						<td><?php echo $d['frais_ceremonie']; ?></td>
						<td><?php echo $d['date_created']; ?></td>
						<td><?php echo $d['last_update']; ?></td>
						<td><?php echo $d['officierCommune']; ?></td>
						<td><?php echo $d['adresseCouple']; ?></td>
						<td>
                            <a href="<?php echo site_url('demandesactesmariage/edit/'.$d['demande_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('demandesactesmariage/remove/'.$d['demande_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
