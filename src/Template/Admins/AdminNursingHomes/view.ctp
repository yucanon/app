<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AdminJob $adminJob
 */
?>
<div class="adminJobs view large-12 medium-12 columns content">
    <h3><?= h($adminJob->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Admin') ?></th>
            <td><?= $adminJob->has('admin') ? $this->Html->link($adminJob->admin->name, ['controller' => 'Admins', 'action' => 'view', $adminJob->admin->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($adminJob->phone_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation') ?></th>
            <td><?= h($adminJob->occupation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupation Detail') ?></th>
            <td><?= h($adminJob->occupation_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= h($adminJob->area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($adminJob->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Period') ?></th>
            <td><?= h($adminJob->work_period) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Time') ?></th>
            <td><?= h($adminJob->work_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holidays') ?></th>
            <td><?= h($adminJob->holidays) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shift Work') ?></th>
            <td><?= h($adminJob->shift_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hourly Wage') ?></th>
            <td><?= h($adminJob->hourly_wage) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Welfare') ?></th>
            <td><?= h($adminJob->welfare) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($adminJob->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nearest Station') ?></th>
            <td><?= h($adminJob->nearest_station) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary Detail') ?></th>
            <td><?= h($adminJob->salary_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Time Detail') ?></th>
            <td><?= h($adminJob->work_time_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Period Detail') ?></th>
            <td><?= h($adminJob->work_period_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Holidays Detail') ?></th>
            <td><?= h($adminJob->holidays_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Detail') ?></th>
            <td><?= h($adminJob->address_detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contents') ?></th>
            <td><?= h($adminJob->contents) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Introduce Job') ?></th>
            <td><?= h($adminJob->introduce_job) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Merit') ?></th>
            <td><?= h($adminJob->merit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($adminJob->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admin Jobs Picture Id') ?></th>
            <td><?= $this->Number->format($adminJob->admin_jobs_picture_id) ?></td>
        </tr>
    </table>
</div>
