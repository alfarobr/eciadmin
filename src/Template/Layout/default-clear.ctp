<?php
$site_name = 'IX Encuentro Científico Internacional del Norte - Invierno 2017';
$description = 'Investigación y Educación para el Desarrollo Sostenible';
?>

<html lang="es">
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
            '/assets/select2/css/select2.min',
            '/assets/select2/css/select2-bootstrap',
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

        <section class="content-page">
    
			<div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->Flash->render('auth') ?>
            </div>
			<?= $this->fetch('content') ?>

        </section>

        <?= $this->Html->script([
            'jquery.min.js',
            'bootstrap.min.js',
            'bootstrap-filestyle.min',
            '/assets/select2/js/select2.full.min',
            '/assets/select2/js/i18n/es',
            'main.js']) ?>

    </body>
</html>