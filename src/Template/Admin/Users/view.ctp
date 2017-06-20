<div class="container">
    <div class="well">
        <h2></h2>
        <dl>
            <dt>Nombre</dt>
            <dd>
                <?= $user->first_name ?>
                &nbsp;
            </dd>
            <br>
            
            <dt>Apellidos</dt>
            <dd>
                <?= $user->last_name ?>
                &nbsp;
            </dd>
            <br>
            
            <dt>Correo</dt>
            <dd>
                <?= $user->email ?>
                &nbsp;
            </dd>
            <br>
            
            <dt>Habilitado</dt>
            <dd>
                <?= $user->active ? 'SI' : 'NO' ?>
                &nbsp;
            </dd>
            <br>
            
            <dt>Creado</dt>
            <dd>
                <?= $user->created->nice() ?>
                &nbsp;
            </dd>
            <br>
            
            <dt>Modificado</dt>
            <dd>
                <?= $user->modified->nice() ?>
                &nbsp;
            </dd>
            <br>
            <?= $this->Html->link('Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-defaut btn-primary']) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], ['confirm' => '¿Desea eliminar el usuario?', 'class' => 'btn btn-sm btn-danger']) ?>
        </dl>
    </div>
</div>