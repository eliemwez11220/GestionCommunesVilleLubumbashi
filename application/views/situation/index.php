<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Situations Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('situation/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Situation Id</th>
						<th>Quartier Sid</th>
						<th>Intitule</th>
						<th>Avenue Sid</th>
						<th>Cellule Sid</th>
						<th>Date Jour Situation</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Contenu Situation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($situations as $s){ ?>
                    <tr>
						<td><?php echo $s['situation_id']; ?></td>
						<td><?php echo $s['quartier_sid']; ?></td>
						<td><?php echo $s['intitule']; ?></td>
						<td><?php echo $s['avenue_sid']; ?></td>
						<td><?php echo $s['cellule_sid']; ?></td>
						<td><?php echo $s['date_jour_situation']; ?></td>
						<td><?php echo $s['date_created']; ?></td>
						<td><?php echo $s['last_update']; ?></td>
						<td><?php echo $s['contenu_situation']; ?></td>
						<td>
                            <a href="<?php echo site_url('situation/edit/'.$s['situation_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('situation/remove/'.$s['situation_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
