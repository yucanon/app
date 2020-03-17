<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserPicture Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $picture_url
 *
 * @property \App\Model\Entity\User[] $users
 */
class UserPicture extends Entity
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
        'picture_url' => true,
        'users' => true,
    ];
}
