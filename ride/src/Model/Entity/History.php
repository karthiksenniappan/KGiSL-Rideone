<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * History Entity
 *
 * @property int $id
 * @property string $booking_number
 * @property string $email
 * @property string $start_place
 * @property string $end_place
 * @property string $amount
 */
class History extends Entity
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
        'booking_number' => true,
        'email' => true,
        'start_place' => true,
        'end_place' => true,
        'amount' => true
    ];
}
