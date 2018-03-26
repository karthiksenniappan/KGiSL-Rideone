<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Driver Entity
 *
 * @property int $id
 * @property string $owners
 * @property string $user_name
 * @property string $password
 * @property string $gender
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $mobile
 * @property string $email
 * @property string $bank_name
 * @property string $account_no
 * @property string $licence_no
 * @property \Cake\I18n\FrozenDate $licence_due
 * @property \Cake\I18n\FrozenDate $joining_date
 */
class Driver extends Entity
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
        'user_name' => true,
        'password' => true,
        'gender' => true,
        'dob' => true,
        'mobile' => true,
        'email' => true,
        'bank_name' => true,
        'account_no' => true,
        'licence_no' => true,
        'licence_due' => true,
        'joining_date' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
