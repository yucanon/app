<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Job Offer'), ['controller' => 'UserJobOffer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Job Offer'), ['controller' => 'UserJobOffer', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Picture'), ['controller' => 'UserPicture', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Picture'), ['controller' => 'UserPicture', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kana') ?></th>
            <td><?= h($user->kana) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($user->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($user->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job') ?></th>
            <td><?= h($user->job) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skill') ?></th>
            <td><?= h($user->skill) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Style') ?></th>
            <td><?= h($user->work_style) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pr') ?></th>
            <td><?= h($user->pr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($user->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($user->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related User Job Offer') ?></h4>
        <?php if (!empty($user->user_job_offer)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Admin Jobs Id') ?></th>
                <th scope="col"><?= __('Work Experience') ?></th>
                <th scope="col"><?= __('Commuting Time') ?></th>
                <th scope="col"><?= __('Spause') ?></th>
                <th scope="col"><?= __('Support Family') ?></th>
                <th scope="col"><?= __('Spause Support Family') ?></th>
                <th scope="col"><?= __('Work Style') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->user_job_offer as $userJobOffer): ?>
            <tr>
                <td><?= h($userJobOffer->id) ?></td>
                <td><?= h($userJobOffer->user_id) ?></td>
                <td><?= h($userJobOffer->admin_jobs_id) ?></td>
                <td><?= h($userJobOffer->work_experience) ?></td>
                <td><?= h($userJobOffer->commuting_time) ?></td>
                <td><?= h($userJobOffer->spause) ?></td>
                <td><?= h($userJobOffer->support_family) ?></td>
                <td><?= h($userJobOffer->spause_support_family) ?></td>
                <td><?= h($userJobOffer->work_style) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UserJobOffer', 'action' => 'view', $userJobOffer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UserJobOffer', 'action' => 'edit', $userJobOffer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserJobOffer', 'action' => 'delete', $userJobOffer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userJobOffer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
