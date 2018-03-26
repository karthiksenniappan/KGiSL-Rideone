<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tariff Entity
 *
 * @property int $id
 * @property string $car_model
 * @property string $categories
 * @property string $tariff_type
 * @property int $minimum_amount
 * @property int $minimun_km
 * @property int $after_extra_amount
 * @property int $night_amount
 */
class Tariff extends Entity
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
        'car_model' => true,
        'categories' => true,
        'tariff_type' => true,
        'minimum_amount' => true,
        'minimun_km' => true,
        'after_extra_amount' => true,
        'night_amount' => true
    ];
}
