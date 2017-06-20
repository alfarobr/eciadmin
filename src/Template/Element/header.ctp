<?php
$site_name = 'VIII Encuentro Científico Internacional del Norte - Trujillo 2017';
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
            '/assets/camera/css/camera.css',
            'main.css']) ?>

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
                            <?= $this->Html->link('ECI TRUJILLO 2017', ['controller' => 'Pages', 'action' => 'display', 'home', 'prefix' => false], ['class' => 'navbar-brand']); ?>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                
                                <li><?= $this->Html->link('Inicio', ['controller' => 'Pages', 'action' => 'display', 'home', 'prefix' => false]); ?></li>
                                <li><?= $this->Html->link('Expositores', ['controller' => 'Pages', 'action' => 'display', 'expositores', 'prefix' => false]); ?></li>
                                <li><?= $this->Html->link('Áreas', ['controller' => 'Pages', 'action' => 'display', 'areas-investigacion', 'prefix' => false]); ?></li>
                                <li><?= $this->Html->link('Programación', ['controller' => 'Pages', 'action' => 'display', 'programacion', 'prefix' => false]); ?></li>
                                <li><?= $this->Html->link('Inscripción', ['controller' => 'Pages', 'action' => 'display', 'inscripcion', 'prefix' => false]); ?></li>
                                <li><?= $this->Html->link('Contacto', ['controller' => 'Pages', 'action' => 'display', 'contacto', 'prefix' => false]); ?></li>
                                
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

        <section class="content-page">