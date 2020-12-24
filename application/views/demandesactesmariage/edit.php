<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Demandesactesmariage Edit</h3>
            </div>
			<?php echo form_open('demandesactesmariage/edit/'.$demandesactesmariage['demande_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nomHomme" class="control-label"><span class="text-danger">*</span>NomHomme</label>
						<div class="form-group">
							<input type="text" name="nomHomme" value="<?php echo ($this->input->post('nomHomme') ? $this->input->post('nomHomme') : $demandesactesmariage['nomHomme']); ?>" class="form-control" id="nomHomme" />
							<span class="text-danger"><?php echo form_error('nomHomme');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomFemme" class="control-label"><span class="text-danger">*</span>NomFemme</label>
						<div class="form-group">
							<input type="text" name="nomFemme" value="<?php echo ($this->input->post('nomFemme') ? $this->input->post('nomFemme') : $demandesactesmariage['nomFemme']); ?>" class="form-control" id="nomFemme" />
							<span class="text-danger"><?php echo form_error('nomFemme');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomTemoin" class="control-label"><span class="text-danger">*</span>NomTemoin</label>
						<div class="form-group">
							<input type="text" name="nomTemoin" value="<?php echo ($this->input->post('nomTemoin') ? $this->input->post('nomTemoin') : $demandesactesmariage['nomTemoin']); ?>" class="form-control" id="nomTemoin" />
							<span class="text-danger"><?php echo form_error('nomTemoin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneCouple" class="control-label"><span class="text-danger">*</span>TelephoneCouple</label>
						<div class="form-group">
							<input type="text" name="telephoneCouple" value="<?php echo ($this->input->post('telephoneCouple') ? $this->input->post('telephoneCouple') : $demandesactesmariage['telephoneCouple']); ?>" class="form-control" id="telephoneCouple" />
							<span class="text-danger"><?php echo form_error('telephoneCouple');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneTemoin" class="control-label">TelephoneTemoin</label>
						<div class="form-group">
							<input type="text" name="telephoneTemoin" value="<?php echo ($this->input->post('telephoneTemoin') ? $this->input->post('telephoneTemoin') : $demandesactesmariage['telephoneTemoin']); ?>" class="form-control" id="telephoneTemoin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="territoireOrigineCouple" class="control-label">TerritoireOrigineCouple</label>
						<div class="form-group">
							<input type="text" name="territoireOrigineCouple" value="<?php echo ($this->input->post('territoireOrigineCouple') ? $this->input->post('territoireOrigineCouple') : $demandesactesmariage['territoireOrigineCouple']); ?>" class="form-control" id="territoireOrigineCouple" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="villeResidenceCouple" class="control-label">VilleResidenceCouple</label>
						<div class="form-group">
							<input type="text" name="villeResidenceCouple" value="<?php echo ($this->input->post('villeResidenceCouple') ? $this->input->post('villeResidenceCouple') : $demandesactesmariage['villeResidenceCouple']); ?>" class="form-control" id="villeResidenceCouple" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_ceremonie" class="control-label">Date Ceremonie</label>
						<div class="form-group">
							<input type="text" name="date_ceremonie" value="<?php echo ($this->input->post('date_ceremonie') ? $this->input->post('date_ceremonie') : $demandesactesmariage['date_ceremonie']); ?>" class="has-datepicker form-control" id="date_ceremonie" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="heure_ceremonie" class="control-label">Heure Ceremonie</label>
						<div class="form-group">
							<input type="text" name="heure_ceremonie" value="<?php echo ($this->input->post('heure_ceremonie') ? $this->input->post('heure_ceremonie') : $demandesactesmariage['heure_ceremonie']); ?>" class="form-control" id="heure_ceremonie" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="frais_ceremonie" class="control-label">Frais Ceremonie</label>
						<div class="form-group">
							<input type="text" name="frais_ceremonie" value="<?php echo ($this->input->post('frais_ceremonie') ? $this->input->post('frais_ceremonie') : $demandesactesmariage['frais_ceremonie']); ?>" class="form-control" id="frais_ceremonie" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $demandesactesmariage['date_created']); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo ($this->input->post('last_update') ? $this->input->post('last_update') : $demandesactesmariage['last_update']); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="officierCommune" class="control-label">OfficierCommune</label>
						<div class="form-group">
							<input type="text" name="officierCommune" value="<?php echo ($this->input->post('officierCommune') ? $this->input->post('officierCommune') : $demandesactesmariage['officierCommune']); ?>" class="form-control" id="officierCommune" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresseCouple" class="control-label">AdresseCouple</label>
						<div class="form-group">
							<textarea name="adresseCouple" class="form-control" id="adresseCouple"><?php echo ($this->input->post('adresseCouple') ? $this->input->post('adresseCouple') : $demandesactesmariage['adresseCouple']); ?></textarea>
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