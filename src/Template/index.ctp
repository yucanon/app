<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminJob[]|\Cake\Collection\CollectionInterface $adminJobs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Admin Job'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Admins'), ['controller' => 'Admins', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Admin'), ['controller' => 'Admins', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adminJobs index large-9 medium-8 columns content">
    <h3><?= __('管理者投稿求人情報編集画面') ?></h3>
    <?php echo $this->Html->link('新求人作成', 'admins/adminJobs/add',['class' => 'button']);?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admins_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupation_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_period') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('holidays') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shift_work') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hourly_wage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('welfare') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nearest_station') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_time_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_period_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('holidays_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contents') ?></th>
                <th scope="col"><?= $this->Paginator->sort('introduce_job') ?></th>
                <th scope="col"><?= $this->Paginator->sort('merit') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminJobs as $adminJob): ?>
            <tr>
                <td><?= $this->Number->format($adminJob->id) ?></td>
                <td><?= h($adminJob->admins_id)?></td>
                <td><?= $this->Number->format($adminJob->admin_jobs_picture_id) ?></td>
                <td><?= h($adminJob->phone_number) ?></td>
                <td><?= h($adminJob->occupation) ?></td>
                <td><?= h($adminJob->occupation_detail) ?></td>
                <td><?= h($adminJob->area) ?></td>
                <td><?= h($adminJob->region) ?></td>
                <td><?= h($adminJob->work_period) ?></td>
                <td><?= h($adminJob->work_time) ?></td>
                <td><?= h($adminJob->holidays) ?></td>
                <td><?= h($adminJob->shift_work) ?></td>
                <td><?= h($adminJob->hourly_wage) ?></td>
                <td><?= h($adminJob->welfare) ?></td>
                <td><?= h($adminJob->address) ?></td>
                <td><?= h($adminJob->nearest_station) ?></td>
                <td><?= h($adminJob->salary_detail) ?></td>
                <td><?= h($adminJob->work_time_detail) ?></td>
                <td><?= h($adminJob->work_period_detail) ?></td>
                <td><?= h($adminJob->holidays_detail) ?></td>
                <td><?= h($adminJob->address_detail) ?></td>
                <td><?= h($adminJob->contents) ?></td>
                <td><?= h($adminJob->introduce_job) ?></td>
                <td><?= h($adminJob->merit) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adminJob->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'create', $adminJob->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adminJob->id], ['confirm' => __('Are you sure you want to delete # {0}?', $adminJob->id)]) ?>
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
