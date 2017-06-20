
<div class="container">
        <h3><strong>Usuarios</strong> <?= $this->Html->link('Agregar Usuario', ['controller' => 'users', 'action' => 'add', '_full' => true], ['class' => 'btn btn-sm btn-defaut btn-primary pull-right']); ?></h3>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="success">
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('first_name', ['Nombre']) ?></th>
                        <th><?= $this->Paginator->sort('last_name', ['Apellidos']) ?></th>
                        <th><?= $this->Paginator->sort('email', ['Correo']) ?></th>
                        <th><?= $this->Paginator->sort('role', ['Rol']) ?></th>
                        <th class="actions">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= $this->Number->format($user->id) ?></td>
                        <td><?= h($user->first_name) ?></td>
                        <td><?= h($user->last_name) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= h($user->role) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('Ver', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-info']) ?>
                            <?= $this->Html->link('Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-defaut btn-primary']) ?>
                            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => '¿Desea eliminar el usuario?', 'class' => 'btn btn-sm btn-danger']) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< Anterior') ?>
                <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
                <?= $this->Paginator->next('Siguiente >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>

</div>