<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserProfile Entity
 *
 * @property int $id
 * @property int $carusers_id
 * @property string $first_name
 * @property string $last_name
 * @property string $contact
 * @property string $address
 * @property \Cake\I18n\FrozenTime $created_date
 * @property \Cake\I18n\FrozenTime $modified-date
 *
 * @property \App\Model\Entity\Caruser $caruser
 */
class UserProfile extends Entity
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
        'carusers_id' => true,
        'first_name' => true,
        'last_name' => true,
        'contact' => true,
        'address' => true,
        'created_date' => true,
        'modified-date' => true,
        'caruser' => true,
    ];
}
