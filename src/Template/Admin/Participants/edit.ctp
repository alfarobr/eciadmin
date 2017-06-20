<?php $this->assign('title', 'Registro de Participantes'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="intro">
                <?= $this->Form->create($participant, ['type' => 'file', 'novalidate' => 'novalidate']) ?>
                <fieldset>
                    <legend><strong class="text-uppercase">Formulario de registro de participante</strong></legend>

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
                                    'label' => ['text' => 'Teléfono / Celular'],
                                    'class' => 'form-control',
                        ]);

                        echo $this->Form->input('study_center', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Institución a la que pertenece <em>(Nombre de la institución o razón social u otro)</em>'],
                                    'class' => 'form-control',
                                    'escape' => false
                        ]);
                        ?>
                        
                        <div class="form-group">
                            <label for="role">Grado Académico</label>
                            <?php
                                $options = ['Bach.' => 'Bach.', 'Lic.' => 'Lic.', 'Ing.' => 'Ing.', 'Mag.' => 'Mg.', 'MsC.' => 'MsC.', 'Dr.' => 'Dr.'];
                                echo $this->Form->input('grade', [
                                    'type' => 'select',
                                    'multiple' => false,
                                    'options' => $options,
                                    'class' => 'form-control',
                                    'label' => false,
                                    'empty' => '<Seleccione>'
                                ]);
                            ?>
                        </div>
                        
                        <?php
                        echo $this->Form->input('country_id', [
                            'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                            'label' => ['text' => 'Procedencia'], 
                            'class' => 'form-control',
                            'empty' => '<Seleccione>'],
                            ['options' => $countries]
                        );

                        echo $this->Form->input('title_article', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Título del Artículo'],
                                    'class' => 'form-control',
                        ]);

                        echo $this->Form->input('author', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Autor Principal'],
                                    'class' => 'form-control',
                        ]);

                        echo $this->Form->input('co_authors', [
                                    'templates' => ['inputContainer' => '<div class="form-group">{{content}}</div>'],
                                    'label' => ['text' => 'Coautores <em>(Separar con comas)</em>'],
                                    'class' => 'form-control',
                                    'escape' => false
                        ]);

                        ?>

                        <div class="form-group">
                            <label for="role">Área de Investigación</label>
                            <?php
                                $options = [
                                    'Ciencias Básicas y Naturales' =>'Ciencias Básicas y Naturales',
                                    'Ingeniería y Tecnología' => 'Ingeniería y Tecnología',
                                    'Ciencias Médicas' => 'Ciencias Médicas',
                                    'Ciencias Agropecuarias' => 'Ciencias Agropecuarias',
                                    'Ciencias Sociales y Humanidades' => 'Ciencias Sociales y Humanidades',
                                    'Educación' => 'Educación'
                                ];
                                echo $this->Form->input('area', [
                                    'type' => 'select',
                                    'multiple' => false,
                                    'options' => $options,
                                    'class' => 'form-control',
                                    'label' => false,
                                    'empty' => '<Seleccione>'
                                ]);
                            ?>
                        </div>
                        
                        <?php
                        echo $this->Form->input('file',  ['type' => 'file', 'label' => 'Adjuntar Resumen de Artículo', 'class' => 'filestyle', 'data-buttonName' => 'btn-primary', 'data-buttonText' => ' Examinar']);
                        ?>
						<br>
						<p class="well well-sm"><strong>Importante:</strong> El resumen del artículo adjunto debe tener el siguiente formato <a href="<?php echo $this->Url->build('/files/downloads/FORMATO_RESUMEN_IX_ECI_2017.pdf', true); ?>" class="btn btn-sm btn-info btn-block text-uppercase" target="_blank">Descargar Formato</a></p>

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