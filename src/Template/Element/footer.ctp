        </section>
        
        <section class="organizadores">
            <div class="container">
                <div>
                    <h3 class="text-uppercase"><strong>Organizadores</strong></h3>
                    <ul id="organizadores-slider">
                        <li><?= $this->Html->image('org-logos/ucv.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/ana.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/ceprecyt.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/cip.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/corcytec-ll.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/grll.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/igp.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/ipen.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/mpt.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/profesores.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/red.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/uladech.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/unasam.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/unprg.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/upao.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/upn.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/uss.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                        <li><?= $this->Html->image('org-logos/winner.png', ['alt' => "", 'class' => 'img-responsive']); ?></li>
                    </ul>
                </div>
            </div>
        </section>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <h4><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> INFORMES</h4>
                        <div class="info">
                            <small>
							
								<address>
									<strong class="text-uppercase">Dra. Mercedes López García Vicerrectora VIC UCV</strong><br>
									<small><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></small> 947896082, 965748742 <br>
									<small><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></small> (044) 485000 Anexos 7012, 7058, 7075 <br>
									<a href="mailto:#">mlopezg@ucv.edu.pe</a>
								</address>
								<address>
									<strong class="text-uppercase">Dirección de Investigación</strong><br>
									<small><span class="glyphicon glyphicon-phone" aria-hidden="true"></span></small> 958673823, #861545 <br>
									<a href="mailto:#">ecinorte@ucv.edu.pe</a>
								</address>
								
                            </small>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
						<a href="http://www.ucv.edu.pe" target="_blank"><?= $this->Html->image('logoucv.png', ['alt' => "Universidad César Vallejo", 'class' => 'img-responsive logo']); ?></a>
                    </div>
                </div>
            </div>
        </footer>

        <?= $this->Html->script([
            'jquery.min.js',
            'bootstrap.min.js',
            'bootstrap-filestyle.min',
            '/assets/lightslider/js/lightslider.js',
            '/assets/camera/js/jquery.min.js',
            '/assets/camera/js/jquery.easing.1.3.js',
            '/assets/camera/js/jquery.mobile.customized.min.js',
            '/assets/camera/js/camera.min.js',
            'main.js']) ?>

    </body>
</html>