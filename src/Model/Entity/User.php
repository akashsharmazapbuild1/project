<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $first name
 * @property string $last name
 * @property string $email
 * @property string $role
 * @property int $mobile no
 * @property string $password
 * @property string $profile img
 * @property int $status
 * @property \Cake\I18n\FrozenTime $created at
 * @property \Cake\I18n\FrozenTime $updated at
 */
class User extends Entity
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
        'first name' => true,
        'last name' => true,
        'email' => true,
        'role' => true,
        'mobile no' => true,
        'password' => true,
        'profile img' => true,
        'status' => true,
        'created at' => true,
        'updated at' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
