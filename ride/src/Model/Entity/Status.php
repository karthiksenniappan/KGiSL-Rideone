<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Status Entity
 *
 * @property int $id
 * @property string $email
 * @property string $now_place
 * @property string $total_count
 * @property string $taxi_number
 * @property string $taxi_status
 * @property string $driver_status
 * @property string $travel_status
 */
class Status extends Entity
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
        'email' => true,
        'now_place' => true,
        'total_count' => true,
        'taxi_number' => true,
        'taxi_status' => true,
        'driver_status' => true,
        'travel_status' => true
    ];
}
