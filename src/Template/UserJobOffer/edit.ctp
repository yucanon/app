<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserJobOffer $userJobOffer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userJobOffer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userJobOffer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Job Offer'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admin Jobs'), ['controller' => 'AdminJobs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin Job'), ['controller' => 'AdminJobs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userJobOffer form large-9 medium-8 columns content">
    <?= $this->Form->create($userJobOffer) ?>
    <fieldset>
        <legend><?= __('Edit User Job Offer') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('admin_jobs_id', ['options' => $adminJobs, 'empty' => true]);
            echo $this->Form->control('work_experience');
            echo $this->Form->control('commuting_time');
            echo $this->Form->control('spause');
            echo $this->Form->control('support_family');
            echo $this->Form->control('spause_support_family');
            echo $this->Form->control('work_style');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
