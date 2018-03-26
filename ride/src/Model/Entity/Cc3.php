<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cc3 Entity
 *
 * @property int $id
 * @property string $email
 * @property \Cake\I18n\FrozenDate $paid_date
 * @property string $total_amount
 * @property string $payable_amount
 * @property string $balance
 * @property string $old_balance
 */
class Cc3 extends Entity
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
        'paid_date' => true,
        'total_amount' => true,
        'payable_amount' => true,
        'balance' => true,
        'old_balance' => true
    ];
}
