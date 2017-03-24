<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $USER_ID
 * @property string $USER_MAIL
 * @property string $USER_FIRSTNAME
 * @property string $USER_LASTNAME
 * @property string $USER_PASSWORD
 * @property bool $USER_IS_ADMIN
 * @property bool $USER_IS_TEACHER
 * @property int $USER_CLASS_ID
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
        '*' => true,
        'USER_ID' => false
    ];

    protected function _setUSER_PASSWORD($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}
