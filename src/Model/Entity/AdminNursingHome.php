<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdminNursingHome Entity
 *
 * @property int $id
 * @property int $admins_id
 * @property string $phone_number
 * @property string $area
 * @property string $region
 * @property string $maximum_price
 * @property string $station_distance
 * @property string $catch_copy
 * @property string $subtitle
 * @property string $occupancy_fee
 * @property string $address
 * @property string $capacity
 * @property string $number_of_staff
 * @property string $introduce_nursing_home
 * @property string $catchcopy_detail
 * @property string $contents
 * @property string $main_image
 * @property string $sub1_image
 * @property string $sub2_image
 * @property string $sub3_image
 * @property string $main_image_detail
 * @property string $sub1_image_detail
 * @property string $sub2_image_detail
 * @property string $sub3_image_detail
 * @property string $acceptance
 *
 * @property \App\Model\Entity\Admin $admin
 */
class AdminNursingHome extends Entity
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
        'admins_id' => true,
        'phone_number' => true,
        'area' => true,
        'region' => true,
        'maximum_price' => true,
        'station_distance' => true,
        'catch_copy' => true,
        'subtitle' => true,
        'occupancy_fee' => true,
        'address' => true,
        'capacity' => true,
        'number_of_staff' => true,
        'introduce_nursing_home' => true,
        'catchcopy_detail' => true,
        'contents' => true,
        'main_image' => true,
        'sub1_image' => true,
        'sub2_image' => true,
        'sub3_image' => true,
        'main_image_detail' => true,
        'sub1_image_detail' => true,
        'sub2_image_detail' => true,
        'sub3_image_detail' => true,
        'acceptance' => true,
        'admin' => true,
    ];
}
