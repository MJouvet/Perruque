<?php $__env->startSection('contenu'); ?>
    <div class="col-sm-offset-4 col-sm-4">
    	<br>
		<div class="panel panel-primary">
			<div class="panel-heading">Fiche du collaborateur</div>
			<div class="panel-body">
				<p>Nom : <?php echo e($collaborateur->Collaborateur_TCa); ?></p>
        <p>Date d'Entrée : <?php echo e($collaborateur->Date_In_TCa); ?></p>
        <p>Date de Départ : <?php echo e($collaborateur->Date_Out_TCa); ?></p>
        <p>Accès : <?php echo e($collaborateur->Acces_TCa); ?></p>
        <p>Responsable : <?php echo e($collaborateur->Responsable_TCa); ?></p>
        <!-- <p>Ticket Restaurant : <?php echo e($collaborateur->TR_TCa); ?></p> -->
				<?php if($collaborateur->TR_TCa == 1): ?>
					Ticket Restaurant
				<?php endif; ?>
			</div>
		</div>
		<a href="javascript:history.back()" class="btn btn-primary">
			<span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
		</a>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>