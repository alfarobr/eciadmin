<?php $this->assign('title', 'Inscripción'); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="intro">
                <h3><strong>Inscripción</strong></h3>
                <p>Se invita a investigadores de las instituciones públicas y privadas, universidades, colegios profesionales, organismos gubernamentales y no gubernamentales, asociaciones civiles en general a participar con la presentación del artículo de su investigación y participación al evento.</p>

                <h4><strong>Derecho de Inscripción: </strong></h4>
                <p>La inscripción de los trabajos de investigación y la participación del público en general a las exposiciones son abiertas y sin costo. Por tal motivo, la organización no financia gastos de participación de ningún tipo.</p>

                <h4><strong>Certificación:</strong></h4>
                <p>Los investigadores recibirán un certificado que los acredita como ponente del evento. Así mismo se certificará al público en general que asista a tres de las cuatro sesiones programadas.</p>

                <h3><strong>Cronograma de Actividades</strong></h3>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="success">
                                <th class="text-center">ACTVIDAD</th>
                                <th class="text-center">RESPONSABLE</th>
                                <th class="text-center">FECHA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Presentación de artículo de investigación</th>
                                <td>Investigador</td>
                                <td>Del 06 diciembre 2016 al 20 de febrero de 2017 </td>
                            </tr>
                            <tr>
                                <th scope="row">Evaluación del informe y confirmación de trabajos aceptados</th>
                                <td>Evaluadores Externos</td>
                                <td>Del 21 al 28 de febrero de 2017</td>
                            </tr>
                            <tr>
                                <th scope="row">Programa final de exposiciones, elaboración y publicación en la página web</th>
                                <td>Comisión Organizadora del VIII ECI Norte Verano 2017</td>
                                <td>Del 01 al 20 de marzo de 2017</td>
                            </tr>
                            <tr>
                                <th scope="row">Elaboración y publicación de resumen</th>
                                <td>Comisión Organizadora del VIII ECI Norte Verano 2017</td>
                                <td>Del 21 al 30 de marzo de 2017</td>
                            </tr>
                            <tr>
                                <th scope="row">Exposiciones de trabajos y Certificación</th>
                                <td>Investigador</td>
                                <td>21 y 22 de abril de 2017</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <?= $this->Html->link('INSCRÍBETE COMO PONENTE', ['controller' => 'participants', 'action' => 'add', '_full' => true], ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <?= $this->Html->link('INSCRÍBETE COMO ASISTENTE', ['controller' => 'assistants', 'action' => 'add', '_full' => true], ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="col-xs-6 col-sm-4 sidebar">
            <?= $this->element('sidebar'); ?> 
        </div>

    </div>
</div>