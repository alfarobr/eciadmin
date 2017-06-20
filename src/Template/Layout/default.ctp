<?php
$site_name = 'IX Encuentro Científico Internacional del Norte - Invierno 2017';
$description = 'Investigación y Educación para el Desarrollo Sostenible';
?>

<html lang="en">
    <head>

        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title><?= $this->fetch('title') ?>: <?= $site_name ?></title>

        <?= $this->Html->meta('icon') ?>

        <meta name="description" content="<?= $description ?>">
        <meta name="author" content="Universidad César Vallejo">

        <!-- OPEN GRAPH -->     
        <meta property="og:site_name" content="<?= $site_name ?>" />
        <meta property="og:url"  content="<?= $this->Url->build(null, true) ?>" />
        <meta property="og:title"  content="<?= $this->fetch('title') . ': ' . $site_name ?> " />
        <meta property="og:description"  content="<?= $description ?>" />
        <meta property="og:image"  content="" />
        <!-- OPEN GRAPH -->

        <?= $this->Html->css([
            'bootstrap.min.css',
            '/assets/lightslider/css/lightslider.css',
            'main.css']) ?>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script type="text/javascript">
            var basePath = "<?= $this->Url->build('/', ['fullBase' => true]); ?>";
        </script>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <header class="header">
            <div class="container">
                <?= $this->Html->image('img-header.png', ['alt' => "", 'class' => 'img-responsive']); ?>
            </div>
            <div class="menu-principal">
                <nav class="navbar navbar-inverse ">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <?= $this->Html->link('Admin ECI', ['controller' => 'users', 'action' => 'login', 'prefix' => 'admin'], ['class' => 'navbar-brand']); ?>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                
                                <li><?= $this->Html->link('Ir al sitio','http://congresosucv.com/eventos/encuentro-cientifico-internacional-verano2017', ['target' => '_blank'] ); ?></li>
								
								<?php if($current_user['role'] == 'admin'): ?>
                                <li class="dropdown">
                                    <?= $this->Html->link('Admin <span class="caret"></span>', '#', ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false', 'escape' => false]); ?>
                                    <ul class="dropdown-menu">
                                        <li><?= $this->Html->link('Participantes', ['controller' => 'participants', 'action' => 'index', 'prefix' => 'admin']); ?></li>
                                        <li><?= $this->Html->link('Agregar Participante', ['controller' => 'participants', 'action' => 'add', 'prefix' => 'admin']); ?></li>
                                        <li role="separator" class="divider"></li>
                                        <li><?= $this->Html->link('Asistentes', ['controller' => 'assistants', 'action' => 'index', 'prefix' => 'admin']); ?></li>
                                        <li><?= $this->Html->link('Agregar Asistente', ['controller' => 'assistants', 'action' => 'add', 'prefix' => 'admin']); ?></li>
                                        <li role="separator" class="divider"></li>
                                        <li><?= $this->Html->link('Usuarios', ['controller' => 'users', 'action' => 'index', 'prefix' => 'admin']); ?></li>
                                        <li><?= $this->Html->link('Agregar Usuario', ['controller' => 'users', 'action' => 'add', 'prefix' => 'admin']); ?></li>
                                        <li role="separator" class="divider"></li>
                                        <li><?= $this->Html->link('Perfil', ['controller' => 'users', 'action' => 'home', 'prefix' => 'admin']); ?></li>
                                        <li><?= $this->Html->link('Salir', ['controller' => 'users', 'action' => 'logout', 'prefix' => 'admin']); ?></li>
                                    </ul>
                                </li>
                                <?php endif; ?>
                                
                                <?php if($current_user['role'] == 'user'): ?>
                                <li class="dropdown">
                                    <?= $this->Html->link('Admin <span class="caret"></span>', '#', ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button', 'aria-haspopup' => 'true', 'aria-expanded' => 'false', 'escape' => false]); ?>
                                    <ul class="dropdown-menu">
                                        <li><?= $this->Html->link('Participantes', ['controller' => 'participants', 'action' => 'index', 'prefix' => 'admin']); ?></li>
                                        <li role="separator" class="divider"></li>
                                        <li><?= $this->Html->link('Asistentes', ['controller' => 'assistants', 'action' => 'index', 'prefix' => 'admin']); ?></li>
                                        <li role="separator" class="divider"></li>        
                                        <li><?= $this->Html->link('Perfil', ['controller' => 'users', 'action' => 'home', 'prefix' => 'admin']); ?></li>
                                        <li><?= $this->Html->link('Salir', ['controller' => 'users', 'action' => 'logout', 'prefix' => 'admin']); ?></li>
                                    </ul>
                                </li>
                                <?php endif; ?>

                            </ul>
                        </div><!-- /.nav-collapse -->
                    </div><!-- /.container -->
                </nav><!-- /.navbar -->
            </div>
        </header>

        <section id="content-page" class="content-page">
    
			<div class="container"> <?= $this->Flash->render() ?></div>
			<?= $this->fetch('content') ?>

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
            'main-admin.js']) ?>

    </body>
</html>
