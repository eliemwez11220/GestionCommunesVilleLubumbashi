<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Cellule Edit</h3>
            </div>
			<?php echo form_open('cellule/edit/'.$cellule['cellule_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="quartier_sid" class="control-label"><span class="text-danger">*</span>Quartier</label>
						<div class="form-group">
							<select name="quartier_sid" class="form-control">
								<option value="">select quartier</option>
								<?php 
								foreach($all_quartiers as $quartier)
								{
									$selected = ($quartier['quartier_id'] == $cellule['quartier_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$quartier['quartier_id'].'" '.$selected.'>'.$quartier['nomQuartier'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('quartier_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomCellule" class="control-label"><span class="text-danger">*</span>NomCellule</label>
						<div class="form-group">
							<input type="text" name="nomCellule" value="<?php echo ($this->input->post('nomCellule') ? $this->input->post('nomCellule') : $cellule['nomCellule']); ?>" class="form-control" id="nomCellule" />
							<span class="text-danger"><?php echo form_error('nomCellule');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomChefCellule" class="control-label">NomChefCellule</label>
						<div class="form-group">
							<input type="text" name="nomChefCellule" value="<?php echo ($this->input->post('nomChefCellule') ? $this->input->post('nomChefCellule') : $cellule['nomChefCellule']); ?>" class="form-control" id="nomChefCellule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneChefCellule" class="control-label">TelephoneChefCellule</label>
						<div class="form-group">
							<input type="text" name="telephoneChefCellule" value="<?php echo ($this->input->post('telephoneChefCellule') ? $this->input->post('telephoneChefCellule') : $cellule['telephoneChefCellule']); ?>" class="form-control" id="telephoneChefCellule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombreAvenues" class="control-label">NombreAvenues</label>
						<div class="form-group">
							<input type="text" name="nombreAvenues" value="<?php echo ($this->input->post('nombreAvenues') ? $this->input->post('nombreAvenues') : $cellule['nombreAvenues']); ?>" class="form-control" id="nombreAvenues" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $cellule['date_created']); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo ($this->input->post('last_update') ? $this->input->post('last_update') : $cellule['last_update']); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresseChefCellule" class="control-label">AdresseChefCellule</label>
						<div class="form-group">
							<textarea name="adresseChefCellule" class="form-control" id="adresseChefCellule"><?php echo ($this->input->post('adresseChefCellule') ? $this->input->post('adresseChefCellule') : $cellule['adresseChefCellule']); ?></textarea>
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