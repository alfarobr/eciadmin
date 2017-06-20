<div class="container">
	<div class="intro">
		<h3 class="text-success"><strong>Su registro se efectuó exitosamente.</strong></h3>
		 <?= $this->Flash->render() ?>
		 <h4><strong><?= $assistant->first_name .' '. $assistant->last_name; ?></strong></h4>
		 <p>Gracias por registrarte y ser parte del <strong>VIII Encuentro Científico Internacional del Norte - Verano 2017.</strong></p>
		 <?= $this->Html->link('Regresar al Inicio', '#'); ?>
	</div>
</div>