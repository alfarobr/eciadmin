<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assistant'), ['action' => 'edit', $assistant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assistant'), ['action' => 'delete', $assistant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assistant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assistants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assistant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assistants view large-9 medium-8 columns content">
    <h3><?= h($assistant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($assistant->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($assistant->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($assistant->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($assistant->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Study Center') ?></th>
            <td><?= h($assistant->study_center) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $assistant->has('country') ? $this->Html->link($assistant->country->name, ['controller' => 'Countries', 'action' => 'view', $assistant->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assistant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($assistant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($assistant->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $assistant->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
