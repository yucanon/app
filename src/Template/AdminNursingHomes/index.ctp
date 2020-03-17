<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminNursingHome[]|\Cake\Collection\CollectionInterface $adminNursingHomes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Admin Nursing Home'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminNursingHomes index large-9 medium-8 columns content">
    <h3><?= __('Admin Nursing Homes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admins_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maximum_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('station_distance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catch_copy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupancy_fee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('capacity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_of_staff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('introduce_nursing_home') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catchcopy_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contents') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub1_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub2_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub3_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main_image_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub1_image_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub2_image_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub3_image_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acceptance') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminNursingHomes as $adminNursingHome): ?>
            <tr>
                <td><?= $this->Number->format($adminNursingHome->id) ?></td>
                <td><?= $adminNursingHome->has('admin') ? $this->Html->link($adminNursingHome->admin->name, ['controller' => 'Admins', 'action' => 'view', $adminNursingHome->admin->id]) : '' ?></td>
                <td><?= h($adminNursingHome->phone_number) ?></td>
                <td><?= h($adminNursingHome->area) ?></td>
                <td><?= h($adminNursingHome->region) ?></td>
                <td><?= h($adminNursingHome->maximum_price) ?></td>
                <td><?= h($adminNursingHome->station_distance) ?></td>
                <td><?= h($adminNursingHome->catch_copy) ?></td>
                <td><?= h($adminNursingHome->subtitle) ?></td>
                <td><?= h($adminNursingHome->occupancy_fee) ?></td>
                <td><?= h($adminNursingHome->address) ?></td>
                <td><?= h($adminNursingHome->capacity) ?></td>
                <td><?= h($adminNursingHome->number_of_staff) ?></td>
                <td><?= h($adminNursingHome->introduce_nursing_home) ?></td>
                <td><?= h($adminNursingHome->catchcopy_detail) ?></td>
                <td><?= h($adminNursingHome->contents) ?></td>
                <td><?= h($adminNursingHome->main_image) ?></td>
                <td><?= h($adminNursingHome->sub1_image) ?></td>
                <td><?= h($adminNursingHome->sub2_image) ?></td>
                <td><?= h($adminNursingHome->sub3_image) ?></td>
                <td><?= h($adminNursingHome->main_image_detail) ?></td>
                <td><?= h($adminNursingHome->sub1_image_detail) ?></td>
                <td><?= h($adminNursingHome->sub2_image_detail) ?></td>
                <td><?= h($adminNursingHome->sub3_image_detail) ?></td>
                <td><?= h($adminNursingHome->acceptance) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adminNursingHome->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adminNursingHome->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adminNursingHome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminNursingHome->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
