<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AdminFuneral Entity
 *
 * @property int $id
 * @property int $admins_id
 * @property string $phone_number
 * @property string $area
 * @property string $region
 * @property string $funeral_type
 * @property string $cost
 * @property string $station_destance
 * @property string $catch_copy
 * @property string $subtitle
 * @property string $evaluation
 * @property string $price_plan
 * @property string $traffic
 * @property string $funeral_detail
 * @property string $plan_list
 * @property string $main_image
 * @property string $sub1_image
 * @property string $main_image_detail
 * @property string $sub1_image_detail
 * @property string $famous_place
 * @property string $nearby_information
 * @property string $address
 *
 * @property \App\Model\Entity\Admin $admin
 */
class AdminFuneral extends Entity
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
        'funeral_type' => true,
        'cost' => true,
        'station_destance' => true,
        'catch_copy' => true,
        'subtitle' => true,
        'evaluation' => true,
        'price_plan' => true,
        'traffic' => true,
        'funeral_detail' => true,
        'plan_list' => true,
        'main_image' => true,
        'sub1_image' => true,
        'main_image_detail' => true,
        'sub1_image_detail' => true,
        'famous_place' => true,
        'nearby_information' => true,
        'address' => true,
        'admin' => true,
    ];
}
