<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QuestionAnswer Entity
 *
 * @property int $QUESTION_ANSWER_ID
 * @property int $QUESTION_ANSWER_QUESTION_ID
 * @property int $QUESTION_ANSWER_ANSWER_ID
 * @property bool $QUESTION_ANSWER_IS_RIGHT_ANSWER
 */
class QuestionAnswer extends Entity
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
        'QUESTION_ANSWER_ID' => false
    ];
}
