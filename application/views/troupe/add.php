<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Troupe Add</h3>
            </div>
            <?php echo form_open('troupe/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="district_sid" class="control-label"><span class="text-danger">*</span>District</label>
						<div class="form-group">
							<select name="district_sid" class="form-control">
								<option value="">select district</option>
								<?php 
								foreach($all_districts as $district)
								{
									$selected = ($district['district_id'] == $this->input->post('district_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$district['district_id'].'" '.$selected.'>'.$district['nomDistrict'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('district_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomTroupe" class="control-label">NomTroupe</label>
						<div class="form-group">
							<input type="text" name="nomTroupe" value="<?php echo $this->input->post('nomTroupe'); ?>" class="form-control" id="nomTroupe" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomResponsable" class="control-label">NomResponsable</label>
						<div class="form-group">
							<input type="text" name="nomResponsable" value="<?php echo $this->input->post('nomResponsable'); ?>" class="form-control" id="nomResponsable" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneResponsable" class="control-label">TelephoneResponsable</label>
						<div class="form-group">
							<input type="text" name="telephoneResponsable" value="<?php echo $this->input->post('telephoneResponsable'); ?>" class="form-control" id="telephoneResponsable" />
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