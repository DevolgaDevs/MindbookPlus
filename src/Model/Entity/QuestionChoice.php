<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuestionChoice Entity
 *
 * @property int $QUESTION_CHOICE_ID
 * @property int $QUESTION_CHOICE_QUESTION_ID
 * @property int $QUESTION_CHOICE_ANSWER_ID
 * @property int $QUESTION_CHOICE_USER_ID
 */
class QuestionChoice extends Entity
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
        'QUESTION_CHOICE_ID' => false
    ];
}
