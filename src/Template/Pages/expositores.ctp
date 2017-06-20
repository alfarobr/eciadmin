<?php $this->assign('title', 'Expositores'); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="intro">
                <h3><strong>Expositores</strong></h3>
                <p>La lista de expositores será publicada según las fechas establecidas en el <?= $this->Html->link('Cronograma de Actividades', ['controller' => 'Pages', 'action' => 'display', 'inscripcion', 'prefix' => false]); ?>.</p>
            </div>
        </div>
        
        <div class="col-xs-6 col-sm-4 sidebar">
            <?= $this->element('sidebar'); ?> 
        </div>

    </div>
</div>