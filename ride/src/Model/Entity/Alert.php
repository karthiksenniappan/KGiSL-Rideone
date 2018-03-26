<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Alert Entity
 *
 * @property int $id
 * @property string $useremail
 * @property string $mobile
 * @property string $car
 * @property string $model
 * @property string $tariff
 * @property string $distance
 * @property string $amount
 * @property string $night
 * @property string $start_place
 * @property string $end_place
 * @property string $status
 */
class Alert extends Entity
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
        'useremail' => true,
        'mobile' => true,
        'car' => true,
        'model' => true,
        'tariff' => true,
        'distance' => true,
        'amount' => true,
        'night' => true,
        'start_place' => true,
        'end_place' => true,
        'status' => true
    ];
}
