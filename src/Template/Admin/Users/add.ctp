<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <?= $this->Form->create($user, ['novalidate']) ?>
            <fieldset>
                <legend><strong class="text-uppercase">Registrar usuario</strong></legend>
                    <?php echo $this->Form->input('first_name', [
                                'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                'label' => ['text' => 'Nombres'],
                                'class' => 'form-control',
                    ]); ?>

                    <?php echo $this->Form->input('last_name', [
                                'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                'label' => ['text' => 'Apellidos'],
                                'class' => 'form-control',
                    ]); ?>

                    <?php echo $this->Form->input('email', [
                                'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                'label' => ['text' => 'Correo'],
                                'class' => 'form-control',
                    ]); ?>

                    <?php echo $this->Form->input('password', [
                                'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                'label' => ['text' => 'Contraseña'],
                                'class' => 'form-control',
                    ]); ?>

                    <?php if($current_user['role'] == 'admin'): ?>
                    <div class="form-group">
                        <label for="role">Rol</label>
                        <?php
                            $options = ['admin' => 'Administrador', 'user' => 'Usuario'];
                            echo $this->Form->select('role', $options,  [
                                        'class' => 'form-control',
                                        'id' => 'role'
                            ]);
                        ?>
                    </div>
                    <?php endif; ?>
                    
                    <div class="checkbox">
                        <label>
                        <?php echo $this->Form->input('active', ['label' => false, 'id' => 'active', 'type' => 'checkbox' ]) ?> Activo
                        </label>
                    </div>
            </fieldset>
            <?= $this->Form->button('REGISTRAR', ['class' => 'btn btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
