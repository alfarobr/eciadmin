<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="intro">
                <h3><strong>Registro finalizado con éxito.</strong></h3>
                 <?= $this->Flash->render() ?>
                 <p>Gracias por registrarte y ser parte del <strong>VIII Encuentro Científico Internacional del Norte - Verano 2017.</strong></p>
                 <?= $this->Html->link('Regresar al Inicio', ['controller' => 'Pages', 'action' => 'display', 'home', 'prefix' => false]); ?>
            </div>
        </div>
        
        <div class="col-xs-6 col-sm-4 sidebar">
            <?= $this->element('sidebar'); ?> 
        </div>

    </div>
</div>