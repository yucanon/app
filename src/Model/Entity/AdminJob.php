<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdminJob Entity
 *
 * @property int $id
 * @property int|null $admins_id
 * @property string|null $main_image
 * @property string|null $sub1_image
 * @property string|null $sub2_image
 * @property string|null $sub3_image
 * @property string|null $phone_number
 * @property string|null $occupation
 * @property string|null $occupation_detail
 * @property string|null $area
 * @property string|null $region
 * @property string|null $work_period
 * @property string|null $work_time
 * @property string|null $holidays
 * @property string|null $shift_work
 * @property string|null $hourly_wage
 * @property string|null $welfare
 * @property string|null $address
 * @property string|null $nearest_station
 * @property string|null $salary_detail
 * @property string|null $work_time_detail
 * @property string|null $work_period_detail
 * @property string|null $holidays_detail
 * @property string|null $address_detail
 * @property string|null $contents
 * @property string|null $catchcopy
 * @property string|null $introduce_job
 * @property string|null $merit
 *
 * @property \App\Model\Entity\Admin $admin
 */
class AdminJob extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
    ];
}
