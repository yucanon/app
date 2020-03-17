<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminNursingHome $adminNursingHome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Admin Nursing Home'), ['action' => 'edit', $adminNursingHome->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Admin Nursing Home'), ['action' => 'delete', $adminNursingHome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminNursingHome->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Admin Nursing Homes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin Nursing Home'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adminNursingHomes view large-9 medium-8 columns content">
    <h3><?= h($adminNursingHome->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Admin') ?></th>
            <td><?= $adminNursingHome->has('admin') ? $this->Html->link($adminNursingHome->admin->name, ['controller' => 'Admins', 'action' => 'view', $adminNursingHome->admin->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($adminNursingHome->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= h($adminNursingHome->area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($adminNursingHome->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maximum Price') ?></th>
            <td><?= h($adminNursingHome->maximum_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Station Distance') ?></th>
            <td><?= h($adminNursingHome->station_distance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catch Copy') ?></th>
            <td><?= h($adminNursingHome->catch_copy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitle') ?></th>
            <td><?= h($adminNursingHome->subtitle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupancy Fee') ?></th>
            <td><?= h($adminNursingHome->occupancy_fee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($adminNursingHome->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Capacity') ?></th>
            <td><?= h($adminNursingHome->capacity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number Of Staff') ?></th>
            <td><?= h($adminNursingHome->number_of_staff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Introduce Nursing Home') ?></th>
            <td><?= h($adminNursingHome->introduce_nursing_home) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catchcopy Detail') ?></th>
            <td><?= h($adminNursingHome->catchcopy_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contents') ?></th>
            <td><?= h($adminNursingHome->contents) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Image') ?></th>
            <td><?= h($adminNursingHome->main_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub1 Image') ?></th>
            <td><?= h($adminNursingHome->sub1_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub2 Image') ?></th>
            <td><?= h($adminNursingHome->sub2_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub3 Image') ?></th>
            <td><?= h($adminNursingHome->sub3_image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Main Image Detail') ?></th>
            <td><?= h($adminNursingHome->main_image_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub1 Image Detail') ?></th>
            <td><?= h($adminNursingHome->sub1_image_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub2 Image Detail') ?></th>
            <td><?= h($adminNursingHome->sub2_image_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub3 Image Detail') ?></th>
            <td><?= h($adminNursingHome->sub3_image_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acceptance') ?></th>
            <td><?= h($adminNursingHome->acceptance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminNursingHome->id) ?></td>
        </tr>
    </table>
</div>
