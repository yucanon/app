<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminFuneral[]|\Cake\Collection\CollectionInterface $adminFunerals
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Admin Funeral'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminFunerals index large-9 medium-8 columns content">
    <h3><?= __('Admin Funerals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admins_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funeral_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('station_destance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catch_copy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtitle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('evaluation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price_plan') ?></th>
                <th scope="col"><?= $this->Paginator->sort('traffic') ?></th>
                <th scope="col"><?= $this->Paginator->sort('funeral_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('plan_list') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub1_image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main_image_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub1_image_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('famous_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nearby_information') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminFunerals as $adminFuneral): ?>
            <tr>
                <td><?= $this->Number->format($adminFuneral->id) ?></td>
                <td><?= $adminFuneral->has('admin') ? $this->Html->link($adminFuneral->admin->name, ['controller' => 'Admins', 'action' => 'view', $adminFuneral->admin->id]) : '' ?></td>
                <td><?= h($adminFuneral->phone_number) ?></td>
                <td><?= h($adminFuneral->area) ?></td>
                <td><?= h($adminFuneral->region) ?></td>
                <td><?= h($adminFuneral->funeral_type) ?></td>
                <td><?= h($adminFuneral->cost) ?></td>
                <td><?= h($adminFuneral->station_destance) ?></td>
                <td><?= h($adminFuneral->catch_copy) ?></td>
                <td><?= h($adminFuneral->subtitle) ?></td>
                <td><?= h($adminFuneral->evaluation) ?></td>
                <td><?= h($adminFuneral->price_plan) ?></td>
                <td><?= h($adminFuneral->traffic) ?></td>
                <td><?= h($adminFuneral->funeral_detail) ?></td>
                <td><?= h($adminFuneral->plan_list) ?></td>
                <td><?= h($adminFuneral->main_image) ?></td>
                <td><?= h($adminFuneral->sub1_image) ?></td>
                <td><?= h($adminFuneral->main_image_detail) ?></td>
                <td><?= h($adminFuneral->sub1_image_detail) ?></td>
                <td><?= h($adminFuneral->famous_place) ?></td>
                <td><?= h($adminFuneral->nearby_information) ?></td>
                <td><?= h($adminFuneral->address) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adminFuneral->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adminFuneral->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adminFuneral->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminFuneral->id)]) ?>
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
