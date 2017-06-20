<?= $this->element('header'); ?> 
    
    <div class="container"> <?= $this->Flash->render() ?></div>
    <?= $this->fetch('content') ?>

<?= $this->element('footer'); ?> 
