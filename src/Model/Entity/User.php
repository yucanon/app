<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int|null $image
 * @property int|null $image_dir
 * @property string|null $email
 * @property string|null $password
 * @property string|null $username
 * @property string|null $kana
 * @property string|null $sex
 * @property \Cake\I18n\FrozenDate|null $birthday
 * @property string|null $phone_number
 * @property string|null $job
 * @property string|null $skill
 * @property string|null $work_style
 * @property string|null $pr
 * @property string|null $comment
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\UserPicture[] $user_picture
 * @property \App\Model\Entity\UserJobOffer[] $user_job_offer
 */
class User extends Entity
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

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
