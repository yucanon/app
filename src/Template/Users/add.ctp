<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Job Offer'), ['controller' => 'UserJobOffer', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Job Offer'), ['controller' => 'UserJobOffer', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Picture'), ['controller' => 'UserPicture', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Picture'), ['controller' => 'UserPicture', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            //echo $this->Form->control('user_picture_id');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('name');
            echo $this->Form->control('kana');
            echo $this->Form->control('sex');
            //echo $this->Form->control('birthday', ['empty' => true]);
            echo $this->Form->control('phone_number');
            echo $this->Form->control('job');
            echo $this->Form->control('skill');
            echo $this->Form->control('work_style');
            echo $this->Form->control('pr');
            echo $this->Form->control('comment');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
