<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Commune Edit</h3>
            </div>
			<?php echo form_open('commune/edit/'.$commune['commune_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nomCommune" class="control-label">NomCommune</label>
						<div class="form-group">
							<input type="text" name="nomCommune" value="<?php echo ($this->input->post('nomCommune') ? $this->input->post('nomCommune') : $commune['nomCommune']); ?>" class="form-control" id="nomCommune" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomBourgmestre" class="control-label">NomBourgmestre</label>
						<div class="form-group">
							<input type="text" name="nomBourgmestre" value="<?php echo ($this->input->post('nomBourgmestre') ? $this->input->post('nomBourgmestre') : $commune['nomBourgmestre']); ?>" class="form-control" id="nomBourgmestre" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneBourgmestre" class="control-label">TelephoneBourgmestre</label>
						<div class="form-group">
							<input type="text" name="telephoneBourgmestre" value="<?php echo ($this->input->post('telephoneBourgmestre') ? $this->input->post('telephoneBourgmestre') : $commune['telephoneBourgmestre']); ?>" class="form-control" id="telephoneBourgmestre" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombreQuartiers" class="control-label">NombreQuartiers</label>
						<div class="form-group">
							<input type="text" name="nombreQuartiers" value="<?php echo ($this->input->post('nombreQuartiers') ? $this->input->post('nombreQuartiers') : $commune['nombreQuartiers']); ?>" class="form-control" id="nombreQuartiers" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="contactBureau" class="control-label">ContactBureau</label>
						<div class="form-group">
							<input type="text" name="contactBureau" value="<?php echo ($this->input->post('contactBureau') ? $this->input->post('contactBureau') : $commune['contactBureau']); ?>" class="form-control" id="contactBureau" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $commune['date_created']); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo ($this->input->post('last_update') ? $this->input->post('last_update') : $commune['last_update']); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresseBourgmestre" class="control-label">AdresseBourgmestre</label>
						<div class="form-group">
							<textarea name="adresseBourgmestre" class="form-control" id="adresseBourgmestre"><?php echo ($this->input->post('adresseBourgmestre') ? $this->input->post('adresseBourgmestre') : $commune['adresseBourgmestre']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresseBureau" class="control-label">AdresseBureau</label>
						<div class="form-group">
							<textarea name="adresseBureau" class="form-control" id="adresseBureau"><?php echo ($this->input->post('adresseBureau') ? $this->input->post('adresseBureau') : $commune['adresseBureau']); ?></textarea>
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