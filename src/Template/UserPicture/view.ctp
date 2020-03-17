<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserPicture $userPicture
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User Picture'), ['action' => 'edit', $userPicture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User Picture'), ['action' => 'delete', $userPicture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userPicture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User Picture'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Picture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userPicture view large-9 medium-8 columns content">
    <h3><?= h($userPicture->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Picture Url') ?></th>
            <td><?= h($userPicture->picture_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($userPicture->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($userPicture->user_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($userPicture->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Picture Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Kana') ?></th>
                <th scope="col"><?= __('Sex') ?></th>
                <th scope="col"><?= __('Birthday') ?></th>
                <th scope="col"><?= __('Phone Number') ?></th>
                <th scope="col"><?= __('Job') ?></th>
                <th scope="col"><?= __('Skill') ?></th>
                <th scope="col"><?= __('Work Style') ?></th>
                <th scope="col"><?= __('Pr') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($userPicture->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->user_picture_id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->name) ?></td>
                <td><?= h($users->kana) ?></td>
                <td><?= h($users->sex) ?></td>
                <td><?= h($users->birthday) ?></td>
                <td><?= h($users->phone_number) ?></td>
                <td><?= h($users->job) ?></td>
                <td><?= h($users->skill) ?></td>
                <td><?= h($users->work_style) ?></td>
                <td><?= h($users->pr) ?></td>
                <td><?= h($users->comment) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
