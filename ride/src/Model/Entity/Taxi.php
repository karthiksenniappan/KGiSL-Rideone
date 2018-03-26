<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Taxi Entity
 *
 * @property int $id
 * @property string $owners
 * @property string $car_name
 * @property string $model
 * @property string $taxi_number
 */
class Taxi extends Entity
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
        'owners' => true,
        'car_name' => true,
        'model' => true,
        'taxi_number' => true
    ];
}
