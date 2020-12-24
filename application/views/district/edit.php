<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">District Edit</h3>
            </div>
			<?php echo form_open('district/edit/'.$district['district_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="quartier_sid" class="control-label">Quartier</label>
						<div class="form-group">
							<select name="quartier_sid" class="form-control">
								<option value="">select quartier</option>
								<?php 
								foreach($all_quartiers as $quartier)
								{
									$selected = ($quartier['quartier_id'] == $district['quartier_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$quartier['quartier_id'].'" '.$selected.'>'.$quartier['nomQuartier'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomDistrict" class="control-label">NomDistrict</label>
						<div class="form-group">
							<input type="text" name="nomDistrict" value="<?php echo ($this->input->post('nomDistrict') ? $this->input->post('nomDistrict') : $district['nomDistrict']); ?>" class="form-control" id="nomDistrict" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomResponsable" class="control-label">NomResponsable</label>
						<div class="form-group">
							<input type="text" name="nomResponsable" value="<?php echo ($this->input->post('nomResponsable') ? $this->input->post('nomResponsable') : $district['nomResponsable']); ?>" class="form-control" id="nomResponsable" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneResponsable" class="control-label">TelephoneResponsable</label>
						<div class="form-group">
							<input type="text" name="telephoneResponsable" value="<?php echo ($this->input->post('telephoneResponsable') ? $this->input->post('telephoneResponsable') : $district['telephoneResponsable']); ?>" class="form-control" id="telephoneResponsable" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombreTroupes" class="control-label">NombreTroupes</label>
						<div class="form-group">
							<input type="text" name="nombreTroupes" value="<?php echo ($this->input->post('nombreTroupes') ? $this->input->post('nombreTroupes') : $district['nombreTroupes']); ?>" class="form-control" id="nombreTroupes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $district['date_created']); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo ($this->input->post('last_update') ? $this->input->post('last_update') : $district['last_update']); ?>" class="has-datetimepicker form-control" id="last_update" />
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