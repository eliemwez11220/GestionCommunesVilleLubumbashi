<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Avenue Add</h3>
            </div>
            <?php echo form_open('avenue/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="cellule_sid" class="control-label"><span class="text-danger">*</span>Cellule</label>
						<div class="form-group">
							<select name="cellule_sid" class="form-control">
								<option value="">select cellule</option>
								<?php 
								foreach($all_cellules as $cellule)
								{
									$selected = ($cellule['cellule_id'] == $this->input->post('cellule_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$cellule['cellule_id'].'" '.$selected.'>'.$cellule['nomCellule'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('cellule_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomAvenue" class="control-label"><span class="text-danger">*</span>NomAvenue</label>
						<div class="form-group">
							<input type="text" name="nomAvenue" value="<?php echo $this->input->post('nomAvenue'); ?>" class="form-control" id="nomAvenue" />
							<span class="text-danger"><?php echo form_error('nomAvenue');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nomChefAvenue" class="control-label">NomChefAvenue</label>
						<div class="form-group">
							<input type="text" name="nomChefAvenue" value="<?php echo $this->input->post('nomChefAvenue'); ?>" class="form-control" id="nomChefAvenue" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telephoneChefAvenue" class="control-label">TelephoneChefAvenue</label>
						<div class="form-group">
							<input type="text" name="telephoneChefAvenue" value="<?php echo $this->input->post('telephoneChefAvenue'); ?>" class="form-control" id="telephoneChefAvenue" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombreMaisons" class="control-label">NombreMaisons</label>
						<div class="form-group">
							<input type="text" name="nombreMaisons" value="<?php echo $this->input->post('nombreMaisons'); ?>" class="form-control" id="nombreMaisons" />
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
					<div class="col-md-6">
						<label for="adresseChefAvenue" class="control-label">AdresseChefAvenue</label>
						<div class="form-group">
							<textarea name="adresseChefAvenue" class="form-control" id="adresseChefAvenue"><?php echo $this->input->post('adresseChefAvenue'); ?></textarea>
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