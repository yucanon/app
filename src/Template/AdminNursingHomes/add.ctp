<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminNursingHome $adminNursingHome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Admin Nursing Homes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminNursingHomes form large-9 medium-8 columns content">
    <?= $this->Form->create($adminNursingHome) ?>
    <fieldset>
        <legend><?= __('Add Admin Nursing Home') ?></legend>
        <?php
            echo $this->Form->control('admins_id', ['options' => $admins]);
            echo $this->Form->control('phone_number');
            echo $this->Form->control('area');
            echo $this->Form->control('region');
            echo $this->Form->control('maximum_price');
            echo $this->Form->control('station_distance');
            echo $this->Form->control('catch_copy');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('occupancy_fee');
            echo $this->Form->control('address');
            echo $this->Form->control('capacity');
            echo $this->Form->control('number_of_staff');
            echo $this->Form->control('introduce_nursing_home');
            echo $this->Form->control('catchcopy_detail');
            echo $this->Form->control('contents');
            echo $this->Form->control('main_image');
            echo $this->Form->control('sub1_image');
            echo $this->Form->control('sub2_image');
            echo $this->Form->control('sub3_image');
            echo $this->Form->control('main_image_detail');
            echo $this->Form->control('sub1_image_detail');
            echo $this->Form->control('sub2_image_detail');
            echo $this->Form->control('sub3_image_detail');
            echo $this->Form->control('acceptance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
