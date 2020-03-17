<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminFuneral $adminFuneral
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin Funeral'), ['action' => 'edit', $adminFuneral->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin Funeral'), ['action' => 'delete', $adminFuneral->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminFuneral->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admin Funerals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Funeral'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminFunerals view large-9 medium-8 columns content">
    <h3><?= h($adminFuneral->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Admin') ?></th>
            <td><?= $adminFuneral->has('admin') ? $this->Html->link($adminFuneral->admin->name, ['controller' => 'Admins', 'action' => 'view', $adminFuneral->admin->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($adminFuneral->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= h($adminFuneral->area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($adminFuneral->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funeral Type') ?></th>
            <td><?= h($adminFuneral->funeral_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cost') ?></th>
            <td><?= h($adminFuneral->cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Station Destance') ?></th>
            <td><?= h($adminFuneral->station_destance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catch Copy') ?></th>
            <td><?= h($adminFuneral->catch_copy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($adminFuneral->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Evaluation') ?></th>
            <td><?= h($adminFuneral->evaluation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price Plan') ?></th>
            <td><?= h($adminFuneral->price_plan) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Traffic') ?></th>
            <td><?= h($adminFuneral->traffic) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Funeral Detail') ?></th>
            <td><?= h($adminFuneral->funeral_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plan List') ?></th>
            <td><?= h($adminFuneral->plan_list) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Image') ?></th>
            <td><?= h($adminFuneral->main_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub1 Image') ?></th>
            <td><?= h($adminFuneral->sub1_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Image Detail') ?></th>
            <td><?= h($adminFuneral->main_image_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub1 Image Detail') ?></th>
            <td><?= h($adminFuneral->sub1_image_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Famous Place') ?></th>
            <td><?= h($adminFuneral->famous_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nearby Information') ?></th>
            <td><?= h($adminFuneral->nearby_information) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($adminFuneral->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminFuneral->id) ?></td>
        </tr>
    </table>
</div>
