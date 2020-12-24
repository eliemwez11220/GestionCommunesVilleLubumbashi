<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Quartier Edit</h3>
            </div>
			<?php echo form_open('quartier/edit/'.$quartier['quartier_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="commune_sid" class="control-label">Commune</label>
						<div class="form-group">
							<select name="commune_sid" class="form-control">
								<option value="">select commune</option>
								<?php 
								foreach($all_communes as $commune)
								{
									$selected = ($commune['commune_id'] == $quartier['commune_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$commune['commune_id'].'" '.$selected.'>'.$commune['nomCommune'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomQuartier" class="control-label">NomQuartier</label>
						<div class="form-group">
							<input type="text" name="nomQuartier" value="<?php echo ($this->input->post('nomQuartier') ? $this->input->post('nomQuartier') : $quartier['nomQuartier']); ?>" class="form-control" id="nomQuartier" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomChefQuatier" class="control-label">NomChefQuatier</label>
						<div class="form-group">
							<input type="text" name="nomChefQuatier" value="<?php echo ($this->input->post('nomChefQuatier') ? $this->input->post('nomChefQuatier') : $quartier['nomChefQuatier']); ?>" class="form-control" id="nomChefQuatier" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneChefQuatier" class="control-label">TelephoneChefQuatier</label>
						<div class="form-group">
							<input type="text" name="telephoneChefQuatier" value="<?php echo ($this->input->post('telephoneChefQuatier') ? $this->input->post('telephoneChefQuatier') : $quartier['telephoneChefQuatier']); ?>" class="form-control" id="telephoneChefQuatier" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombreCellules" class="control-label">NombreCellules</label>
						<div class="form-group">
							<input type="text" name="nombreCellules" value="<?php echo ($this->input->post('nombreCellules') ? $this->input->post('nombreCellules') : $quartier['nombreCellules']); ?>" class="form-control" id="nombreCellules" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="contactBureauQuartier" class="control-label">ContactBureauQuartier</label>
						<div class="form-group">
							<input type="text" name="contactBureauQuartier" value="<?php echo ($this->input->post('contactBureauQuartier') ? $this->input->post('contactBureauQuartier') : $quartier['contactBureauQuartier']); ?>" class="form-control" id="contactBureauQuartier" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $quartier['date_created']); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo ($this->input->post('last_update') ? $this->input->post('last_update') : $quartier['last_update']); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresseChefQuatier" class="control-label">AdresseChefQuatier</label>
						<div class="form-group">
							<textarea name="adresseChefQuatier" class="form-control" id="adresseChefQuatier"><?php echo ($this->input->post('adresseChefQuatier') ? $this->input->post('adresseChefQuatier') : $quartier['adresseChefQuatier']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresseBureauQuartier" class="control-label">AdresseBureauQuartier</label>
						<div class="form-group">
							<textarea name="adresseBureauQuartier" class="form-control" id="adresseBureauQuartier"><?php echo ($this->input->post('adresseBureauQuartier') ? $this->input->post('adresseBureauQuartier') : $quartier['adresseBureauQuartier']); ?></textarea>
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