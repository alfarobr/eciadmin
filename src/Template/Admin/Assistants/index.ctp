<div class="container">
    <h3><strong>ASISTENTES</strong></h3>
    <p>
        <?= $this->Html->link('Agregar Asistante', ['controller' => 'assistants', 'action' => 'add', '_full' => true], ['class' => 'btn btn-sm btn-defaut btn-primary']); ?>
        <?= $this->Html->link('<span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Descargar', ['controller' => 'assistants',	'action' => 'export', 'prefix' => 'admin'], ['class' => 'btn btn-sm btn-default', 'escape' => false]) ?>
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
                    <th class="text-center"><?= $this->Paginator->sort('country_id', ['Nacionalidad']) ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('creatred', ['F. Registro']) ?></th>
					<th class="text-center"><?= $this->Paginator->sort('active', ['Estado']) ?></th>
                    <th class="text-center"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($assistants as $assistant): ?>
                <tr>
                    <td><?= $this->Number->format($assistant->id) ?></td>
                    <td><?= h($assistant->first_name) ?></td>
                    <td><?= h($assistant->last_name) ?></td>
                    <td><?= h($assistant->email) ?></td>
                    <td><?= h($assistant->phone) ?></td>
                    <td><?= h($assistant->study_center) ?></td>
                    <td><?= h($assistant->country->name) ?></td>
					<td><?= h($assistant->created->format('d/m/Y')) ?></td>
                    <td class="text-center">
						<?php if($assistant->active == 1) : ?>
                            <a href="#" data-id="<?= $assistant->id ?>" data-active="<?= $assistant->active ?>" class="update-active-assistant text-green" data-toggle="tooltip" data-placement="top" title="Descargado"><span class="glyphicon glyphicon-ok"></span></a>
						<?php else: ?>
                            <a href="#" data-id="<?= $assistant->id ?>" data-active="<?= $assistant->active ?>" class="update-active-assistant text-red" data-toggle="tooltip" data-placement="top" title="No descargado"><span class="glyphicon glyphicon-remove"></span></a>
                        <?php endif; ?>
					
					</td>
                    <td class="actions">
                        <?= $this->Html->link(__('Ver'), ['action' => 'edit', $assistant->id], ['class' => 'btn btn-xs btn-info']) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $assistant->id], ['class' => 'btn btn-xs btn-primary']) ?>
                        <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $assistant->id], ['confirm' => '¿Desea eliminar al asistente?', 'class' => 'btn btn-xs btn-danger'], ['class' => 'btn btn-sm btn-info']) ?>
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
