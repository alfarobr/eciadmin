<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="intro">
                <?= $this->Form->create($assistant, ['novalidate' => 'novalidate']) ?>
                <fieldset>
                    <legend><strong class="text-uppercase">Formulario de registro de Asistente</strong></legend>

                    <p class="text-info">La inscripción de los trabajos de investigación y la participación del público en general a las exposiciones son abiertas y sin costo. Por tal motivo, la organización no financia gastos de participación de ningún tipo.</p>

                    <?php
                        echo $this->Form->input('first_name', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Nombres'],
                                    'class' => 'form-control',
                        ]);
                        
                        echo $this->Form->input('last_name', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Apellidos'],
                                    'class' => 'form-control',
                        ]);

                        echo $this->Form->input('email', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Correo'],
                                    'class' => 'form-control',
                        ]);

                        echo $this->Form->input('phone', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Teléfono'],
                                    'class' => 'form-control',
                        ]);

                        
                        echo $this->Form->input('country_id', [
                            'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                            'label' => ['text' => 'Nacionalidad'], 
                            'class' => 'form-control',
                            'empty' => '<Seleccione>'],
                            ['options' => $countries]
                        );
                        

                        echo $this->Form->input('study_center', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Institución a la que pertenece <em>(Nombre de la institución o razón social u otro)</em>'],
                                    'class' => 'form-control',
                                    'escape' => false
                        ]);
                        ?>
						
						<div class="checkbox">
							<label>
							<input type="checkbox" checked="" required=""> <span class="tx_inter2">He leído y acepto la política de <ins data-toggle="tooltip" data-placement="top" title="
							  El suministro de los datos personales detallados en el presente formulario implica la aceptación de su tratamiento con la única finalidad de recibir información de las actividades académicas o de aquellas relacionadas directa o indirectamente con el proceso de formación en la Universidad César Vallejo, así como de los productos o servicios prestados por la institución, mas no para ser compartidos con terceros no autorizados."> protección de datos.</ins></span>
							</label>
						</div>
						<br>

                        <?php
                        //echo $this->Form->input('active');
                        ?>
                </fieldset>
                <?= $this->Form->button('ACTUALIZAR', ['class' => 'btn btn-success']) ?>
                <?= $this->Html->link('CANCELAR', ['action' => 'index'], ['class' => 'btn btn-danger btn-flat']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>

    </div>
</div>