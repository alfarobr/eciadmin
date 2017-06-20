<div class="container">
	<div class="intro">
		<h3><strong>Su registro se efectuó exitosamente.</strong></h3>
		 <?= $this->Flash->render() ?>
		 <h4><strong><?= $participant->first_name .' '. $participant->last_name; ?></strong></h4>
		 <p>Gracias por registrarte y ser parte del <strong>IX Encuentro Científico Internacional del Norte - Invierno 2017.</strong></p>
		 <?= $this->Html->link('Regresar al Inicio', '#'); ?>
	</div>
</div>