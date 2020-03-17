<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserJobOffer $userJobOffer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Job Offer'), ['action' => 'edit', $userJobOffer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Job Offer'), ['action' => 'delete', $userJobOffer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userJobOffer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Job Offer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Job Offer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admin Jobs'), ['controller' => 'AdminJobs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Job'), ['controller' => 'AdminJobs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userJobOffer view large-9 medium-8 columns content">
    <h3><?= h($userJobOffer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $userJobOffer->has('user') ? $this->Html->link($userJobOffer->user->name, ['controller' => 'Users', 'action' => 'view', $userJobOffer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admin Job') ?></th>
            <td><?= $userJobOffer->has('admin_job') ? $this->Html->link($userJobOffer->admin_job->id, ['controller' => 'AdminJobs', 'action' => 'view', $userJobOffer->admin_job->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Experience') ?></th>
            <td><?= h($userJobOffer->work_experience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commuting Time') ?></th>
            <td><?= h($userJobOffer->commuting_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Spause') ?></th>
            <td><?= h($userJobOffer->spause) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Support Family') ?></th>
            <td><?= h($userJobOffer->support_family) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Spause Support Family') ?></th>
            <td><?= h($userJobOffer->spause_support_family) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Style') ?></th>
            <td><?= h($userJobOffer->work_style) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userJobOffer->id) ?></td>
        </tr>
    </table>
</div>
