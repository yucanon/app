<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserPicture $userPicture
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userPicture->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userPicture->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Picture'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userPicture form large-9 medium-8 columns content">
    <?= $this->Form->create($userPicture) ?>
    <fieldset>
        <legend><?= __('Edit User Picture') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('picture_url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
