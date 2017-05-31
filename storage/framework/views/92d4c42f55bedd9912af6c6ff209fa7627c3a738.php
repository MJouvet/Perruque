<?php $__env->startSection('contenu'); ?>
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Modification d'un collaborateur</div>
			<div class="panel-body">
				<div class="col-sm-12">
					<?php echo Form::model($collaborateur, ['route' => ['collaborateur.update', $collaborateur->Id_TCa], 'method' => 'put', 'class' => 'form-horizontal panel']); ?>

					<div class="form-group <?php echo $errors->has('Collaborateur_TCa') ? 'has-error' : ''; ?>">
					  	<?php echo Form::text('Collaborateur_TCa', null, ['class' => 'form-control', 'placeholder' => 'Nom']); ?>

					  	<?php echo $errors->first('Collaborateur_TCa', '<small class="help-block">:message</small>'); ?>

					</div>
          <div class="form-group <?php echo $errors->has('Date_In_TCa') ? 'has-error' : ''; ?>">
					  	<?php echo Form::date('Date_In_TCa', null, ['class' => 'form-control', 'placeholder' => 'Date entrée']); ?>

					  	<!-- <?php echo $errors->first('Date_In_TCa', '<small class="help-block">:message</small>'); ?> -->
					</div>
          <div class="form-group <?php echo $errors->has('Date_Out_TCa') ? 'has-error' : ''; ?>">
					  	<?php echo Form::date('Date_Out_TCa', null, ['class' => 'form-control', 'placeholder' => 'Date Sortie']); ?>

					  	<?php echo $errors->first('Date_Out_TCa', '<small class="help-block">:message</small>'); ?>

					</div>
          <div class="form-group <?php echo $errors->has('Acces_TCa') ? 'has-error' : ''; ?>">
					  	<?php echo Form::text('Acces_TCa', null, ['class' => 'form-control', 'placeholder' => 'Accès']); ?>

					  	<!-- <?php echo $errors->first('Acces_TCa', '<small class="help-block">:message</small>'); ?> -->
					</div>
          <div class="form-group <?php echo $errors->has('Responsable_TCa') ? 'has-error' : ''; ?>">
					  	<!-- <?php echo Form::text('Responsable_TCa', null, ['class' => 'form-control', 'placeholder' => 'Responsable']); ?> -->
					  	<!-- <?php echo $errors->first('Responsable_TCa', '<small class="help-block">:message</small>'); ?> -->
              <select class="form-control" name="Responsable_TCa">
								<option selected="selected"  hidden="hidden" value>Responsable</option>
								<option value="Cédric Dupuis">Cédric Dupuis</option>
								<option value="Bastien Jambon">Bastien Jambon</option>
							</select>

					</div>

					<div class="form-group">
						<div class="checkbox">
							<label>
								<?php echo Form::checkbox('TR_TCa', 1, null); ?>Ticket Restaurant
							</label>
						</div>
					</div>
						<?php echo Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']); ?>

					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>