<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Affectation Add</h3>
            </div>
            <?php echo form_open('affectation/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="troupe_affecter" class="control-label">Troupe</label>
						<div class="form-group">
							<select name="troupe_affecter" class="form-control">
								<option value="">select troupe</option>
								<?php 
								foreach($all_troupes as $troupe)
								{
									$selected = ($troupe['troupe_id'] == $this->input->post('troupe_affecter')) ? ' selected="selected"' : "";

									echo '<option value="'.$troupe['troupe_id'].'" '.$selected.'>'.$troupe['nomTroupe'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomAgent" class="control-label">NomAgent</label>
						<div class="form-group">
							<input type="text" name="nomAgent" value="<?php echo $this->input->post('nomAgent'); ?>" class="form-control" id="nomAgent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="matriculeAgent" class="control-label">MatriculeAgent</label>
						<div class="form-group">
							<input type="text" name="matriculeAgent" value="<?php echo $this->input->post('matriculeAgent'); ?>" class="form-control" id="matriculeAgent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneAgent" class="control-label">TelephoneAgent</label>
						<div class="form-group">
							<input type="text" name="telephoneAgent" value="<?php echo $this->input->post('telephoneAgent'); ?>" class="form-control" id="telephoneAgent" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_affectation" class="control-label">Date Affectation</label>
						<div class="form-group">
							<input type="text" name="date_affectation" value="<?php echo $this->input->post('date_affectation'); ?>" class="has-datepicker form-control" id="date_affectation" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo $this->input->post('date_created'); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo $this->input->post('last_update'); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>