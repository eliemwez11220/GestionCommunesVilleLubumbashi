<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Situation Add</h3>
            </div>
            <?php echo form_open('situation/add'); ?>
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
									$selected = ($quartier['quartier_id'] == $this->input->post('quartier_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$quartier['quartier_id'].'" '.$selected.'>'.$quartier['nomQuartier'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('quartier_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="intitule" class="control-label">Intitule</label>
						<div class="form-group">
							<input type="text" name="intitule" value="<?php echo $this->input->post('intitule'); ?>" class="form-control" id="intitule" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="avenue_sid" class="control-label">Avenue Sid</label>
						<div class="form-group">
							<input type="text" name="avenue_sid" value="<?php echo $this->input->post('avenue_sid'); ?>" class="form-control" id="avenue_sid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="cellule_sid" class="control-label">Cellule Sid</label>
						<div class="form-group">
							<input type="text" name="cellule_sid" value="<?php echo $this->input->post('cellule_sid'); ?>" class="form-control" id="cellule_sid" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_jour_situation" class="control-label">Date Jour Situation</label>
						<div class="form-group">
							<input type="text" name="date_jour_situation" value="<?php echo $this->input->post('date_jour_situation'); ?>" class="has-datepicker form-control" id="date_jour_situation" />
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
						<label for="contenu_situation" class="control-label">Contenu Situation</label>
						<div class="form-group">
							<textarea name="contenu_situation" class="form-control" id="contenu_situation"><?php echo $this->input->post('contenu_situation'); ?></textarea>
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