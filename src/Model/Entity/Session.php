<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Session Entity
 *
 * @property int $SESSION_ID
 * @property string $SESSION_NAME
 * @property int $SESSION_USER_ID
 * @property \Cake\I18n\Time $SESSION_DATE
 * @property bool $SESSION_HAS_QUESTIONS
 */
class Session extends Entity
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
        'SESSION_ID' => false
    ];
}
