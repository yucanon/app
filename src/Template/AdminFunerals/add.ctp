<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminFuneral $adminFuneral
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Admin Funerals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminFunerals form large-9 medium-8 columns content">
    <?= $this->Form->create($adminFuneral) ?>
    <fieldset>
        <legend><?= __('Add Admin Funeral') ?></legend>
        <?php
            echo $this->Form->control('admins_id', ['options' => $admins]);
            echo $this->Form->control('phone_number');
            echo $this->Form->control('area');
            echo $this->Form->control('region');
            echo $this->Form->control('funeral_type');
            echo $this->Form->control('cost');
            echo $this->Form->control('station_destance');
            echo $this->Form->control('catch_copy');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('evaluation');
            echo $this->Form->control('price_plan');
            echo $this->Form->control('traffic');
            echo $this->Form->control('funeral_detail');
            echo $this->Form->control('plan_list');
            echo $this->Form->control('main_image');
            echo $this->Form->control('sub1_image');
            echo $this->Form->control('main_image_detail');
            echo $this->Form->control('sub1_image_detail');
            echo $this->Form->control('famous_place');
            echo $this->Form->control('nearby_information');
            echo $this->Form->control('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
