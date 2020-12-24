<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quartiers Listing - Resultats de recherche</h3>
            	
            </div>
            <div class="box-body">
                 <div class="table-responsive">
                <table class="table-sm table table-striped">
                    <tr>
						<th>ID</th>
						
						<th>NomQuartier</th>
						<th>NomChefQuatier</th>
						<th>TelephoneChefQuatier</th>
						<th>NombreCellules</th>
						<th>ContactBureauQuartier</th>
						<th>AdresseChefQuatier</th>
						<th>AdresseBureauQuartier</th>
                        <th>NomCommune</th>
                        <th>NomBourgmestre</th>
                        <th>NombreQuartiers</th>
						
                    </tr>
                    <?php 
                    if(!empty($quartiers)){
                    foreach($quartiers as $q){ ?>
                    <tr>
						<td><?php echo $q->quartier_id; ?></td>
						
						<td><?php echo $q->nomQuartier; ?></td>
						<td><?php echo $q->nomChefQuatier; ?></td>
						<td><?php echo $q->telephoneChefQuatier; ?></td>
						<td><?php echo $q->nombreCellules; ?></td>
						<td><?php echo $q->contactBureauQuartier; ?></td>
		
						<td><?php echo $q->adresseChefQuatier; ?></td>
						<td><?php echo $q->adresseBureauQuartier; ?></td>
                            <td><?php echo $q->nomCommune; ?></td>
                        <td><?php echo $q->nomBourgmestre; ?></td>
                        
                    </tr>
                    <?php }}else{echo 'Aucun resultat correspondant a votre critere.';} ?>
                </table>
                 </div>        
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
