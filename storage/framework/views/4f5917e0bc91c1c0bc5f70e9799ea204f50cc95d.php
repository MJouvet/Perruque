<?php $__env->startSection('contenu'); ?>
    <br>
    <div class="col-sm-offset-1 col-sm-10">
    	<?php if(session()->has('ok')): ?>
			<div class="alert alert-success alert-dismissible"><?php echo session('ok'); ?></div>
		<?php endif; ?>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Liste des collaborateurs</h3>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
            <th>Nom</th>
						<th>Date d'Entrée</th>
            <th>Date de Départ</th>
						<th>Accès</th>
            <th>Responsable</th>
						<th>Ticket Restaurant</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $__currentLoopData = $T_Collaborateurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collaborateur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo $collaborateur->Id_TCa; ?></td>
							<td class="text-primary"><strong><?php echo $collaborateur->Collaborateur_TCa; ?></strong></td>
              <td class="text-primary"><strong><?php echo $collaborateur->Date_In_TCa; ?></strong></td>
              <td class="text-primary"><strong><?php echo $collaborateur->Date_Out_TCa; ?></strong></td>
              <td class="text-primary"><strong><?php echo $collaborateur->Acces_TCa; ?></strong></td>
              <td class="text-primary"><strong><?php echo $collaborateur->Responsable_TCa; ?></strong></td>
              <td class="text-primary"><strong><?php echo $collaborateur->TR_TCa; ?></strong></td>
							<td><?php echo link_to_route('collaborateur.show', 'Voir', [$collaborateur->Id_TCa], ['class' => 'btn btn-success btn-block']); ?></td>
							<td><?php echo link_to_route('collaborateur.edit', 'Modifier', [$collaborateur->Id_TCa], ['class' => 'btn btn-warning btn-block']); ?></td>
							<td>
								<?php echo Form::open(['method' => 'DELETE', 'route' => ['collaborateur.destroy', $collaborateur->Id_TCa]]); ?>

									<?php echo Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']); ?>

								<?php echo Form::close(); ?>

							</td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	  			</tbody>
			</table>
		</div>
		<?php echo link_to_route('collaborateur.create', 'Ajouter un collaborateur', [], ['class' => 'btn btn-info pull-right']); ?>

		<?php echo $links; ?>

	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>