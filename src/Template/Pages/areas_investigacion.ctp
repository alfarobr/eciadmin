<?php $this->assign('title', 'Áreas de Investigación'); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="intro">
                <h3><strong>Areas de Investigación</strong></h3>
                <p>El VIII ECI del Norte 2017 está enmarcado dentro de las prioridades nacionales y regionales de investigación científica. Los proyectos de investigación que se presenten corresponderán a una de las siguientes áreas y deben estar referidos a los siguientes campos de aplicación para el Desarrollo Sostenible:</p>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="success">
                                <th class="text-center">AREAS DE INVESTIGCIÓN</th>
                                <th class="text-center">CAMPOS DE APLICACIÓN PARA EL DESARROLLO SOSTENIBLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Ciencias Básicas y Naturales</th>
                                <td>Modelos matemáticos y físicos, química del medio ambiente, biodiversidad, contaminación ambiental, cambio climático, conservación de hábitats, biorremediación, proyecto genoma humano, estudios de ADN y temas afines.</td>
                            </tr>
                            <tr>
                                <th scope="row">Ingeniería y Tecnología</th>
                                <td>Energía, gestión del agua, prevención y mitigación de desastres, urbanización sostenible, gestión de residuos, uso sostenible de recursos y temas afines.</td>
                            </tr>
                            <tr>
                                <th scope="row">Ciencias Médicas</th>
                                <td>Terapias génicas, promoción de la salud, estilos de vida saludables, epidemias y endemias, desnutrición, drogadicción, planificación familiar y temas afines.</td>
                            </tr>
                            <tr>
                                <th scope="row">Ciencias Agropecuarias</th>
                                <td>Agricultura orgánica, ganadería, desarrollo rural, seguridad alimentaria, mejoramiento genético de ganado y plantas, degradación de suelos, forestación y temas afines.</td>
                            </tr>
                            <tr>
                                <th scope="row">Ciencias Sociales y Humanidades</th>
                                <td>Derechos humanos, paz y seguridad, equidad de género, diversidad cultural y entendimiento intercultural, gobernanza, gestión participativa y concertada, reducción de la pobreza, responsabilidad social, economía social de mercado y temas afines.</td>
                            </tr>
                            <tr>
                                <th scope="row">Educación</th>
                                <td>Experiencias educativas innovadoras, educación ambiental, educación intercultural, educación para la paz, educación para la ciencia y tecnología, alfabetización y temas afines.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="btn btn-primary btn-lg btn-block">PARTICIPAR COMO PONENTE</a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="btn btn-primary btn-lg btn-block">PARTICIPAR COMO ASISTENTE</a>
                    </div>
                </div>

            </div>
        </div>
        
        <div class="col-xs-6 col-sm-4 sidebar">
            <?= $this->element('sidebar'); ?> 
        </div>

    </div>
</div>