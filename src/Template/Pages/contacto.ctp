<?php $this->assign('title', 'Contacto'); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="intro">
                <h3><strong>Contacto</strong></h3>
                
                <div class="row">
                    <div class="col-sm-6">
                        <address>
                            <strong class="text-uppercase">Dra. Mercedes López García <br> Vicerrectora VIC Universidad César Vallejo</strong><br>
                            <small><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></small> 947896082, 965748742 <br>
                            <small><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></small> (044) 485000 Anexos 7012, 7058, 7075
                            <a href="mailto:#">mlopezg@ucv.edu.pe</a>
                        </address>
                    </div>
                    <div class="col-sm-6">
                        <address>
                            <strong class="text-uppercase">Dirección de Investigación <br> Universidad César Vallejo</strong><br>
                            <small><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></small> 958673823, #861545 <br>
                            <a href="mailto:#">ecinorte@ucv.edu.pe</a>
                        </address>
                    </div>
                    <div class="col-sm-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d987.4314368918824!2d-79.04337609391791!3d-8.129379171754346!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f010aedcda7ac7d!2sAuditorio+Hector+Acu%C3%B1a+UCV!5e0!3m2!1ses!2ses!4v1486326981631" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <?= $this->Html->link('REGÍSTRATE COMO PONENTE', ['controller' => 'participants', 'action' => 'add', '_full' => true], ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <?= $this->Html->link('REGÍSTRATE COMO ASISTENTE', ['controller' => 'assistants', 'action' => 'add', '_full' => true], ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                </div>
            </div>

        </div>
        
        <div class="col-xs-6 col-sm-4 sidebar">
            <?= $this->element('sidebar'); ?> 
        </div>

    </div>
</div>