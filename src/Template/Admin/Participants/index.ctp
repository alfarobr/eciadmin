<div class="container">
    <h3><strong>PARTICIPANTES</strong></h3>
    <p>
        <?= $this->Html->link('Agregar Participante', ['controller' => 'participants', 'action' => 'add', '_full' => true], ['class' => 'btn btn-sm btn-defaut btn-primary']); ?>
        <?= $this->Html->link('<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Descargar', ['controller' => 'participants',	'action' => 'export', 'prefix' => 'admin'], ['class' => 'btn btn-sm btn-default', 'escape' => false]) ?>
    </p>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr class="success">
                    <th class="text-center"><?= $this->Paginator->sort('id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('first_name', ['Nombres']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('last_name', ['Apellidos']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('email', ['Correo']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('phone', ['Teléfono']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('study_center', ['Centro']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('grade', ['Grado']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('country_id', ['Nacionalidad']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('area', ['Área']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('file', ['Artículo']) ?></th>
					<th class="text-center"><?= $this->Paginator->sort('created', ['F. Registro']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('active', ['Estado']) ?></th>
                    <th class="text-center"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($participants as $participant): ?>
                <tr>
                    <td><?= $this->Number->format($participant->id) ?></td>
                    <td><?= h($participant->first_name) ?></td>
                    <td><?= h($participant->last_name) ?></td>
                    <td><?= h($participant->email) ?></td>
                    <td><?= h($participant->phone) ?></td>
                    <td><?= h($participant->study_center) ?></td>
                    <td><?= h($participant->grade) ?></td>
                    <td><?= h($participant->country->name) ?></td>
                    <td><?= h($participant->area) ?></td>
                    <td>
                        <?php
                        if($participant->get('file_dir')!=""){ 
                            echo $this->Html->link('<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Descargar', '/files/participants/file/' . $participant->get('file_dir') . '/' . $participant->get('file'), ['class' => 'btn btn-xs btn-default', 'target' => '_blank', 'escape' => false]);
                        } else {
                            echo '<p class="text-danger">Sin Artículo</p>';
                        }
                        ?>
                    </td>
					
					<td><?= h($participant->created->format('d/m/Y'))?></td>
					
                    <td class="text-center">
						<?php if($participant->active == 1) : ?>
                            <a href="#" data-id="<?= $participant->id ?>" data-active="<?= $participant->active ?>" class="update-active-participant text-green" data-toggle="tooltip" data-placement="top" title="Descargado"><span class="glyphicon glyphicon-ok"></span></a>
						<?php else: ?>
                            <a href="#" data-id="<?= $participant->id ?>" data-active="<?= $participant->active ?>" class="update-active-participant text-red" data-toggle="tooltip" data-placement="top" title="No descargado"><span class="glyphicon glyphicon-remove"></span></a>
                        <?php endif; ?>
					
					</td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'edit', $participant->id], ['class' => 'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $participant->id], ['class' => 'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $participant->id], ['confirm' => '¿Desea eliminar al participante?', 'class' => 'btn btn-xs btn-danger'], ['class' => 'btn btn-sm btn-info']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('primero')) ?>
                <?= $this->Paginator->prev('< ' . __('anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('siguiente') . ' >') ?>
                <?= $this->Paginator->last(__('último') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} fila(s) de {{count}} en total')]) ?></p>
        </div>
    </div>
</div>