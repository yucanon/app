<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserJobOffer Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $admin_jobs_id
 * @property string|null $work_experience
 * @property string|null $commuting_time
 * @property string|null $spause
 * @property string|null $support_family
 * @property string|null $spause_support_family
 * @property string|null $work_style
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\AdminJob $admin_job
 */
class UserJobOffer extends Entity
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
        'user_id' => true,
        'admin_jobs_id' => true,
        'work_experience' => true,
        'commuting_time' => true,
        'spause' => true,
        'support_family' => true,
        'spause_support_family' => true,
        'work_style' => true,
        'user' => true,
        'admin_job' => true,
    ];
}
