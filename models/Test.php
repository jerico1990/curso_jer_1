<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property integer $id
 * @property integer $persona_id
 * @property integer $p1
 * @property integer $p2_1
 * @property integer $p2_2
 * @property integer $p2_3
 * @property integer $p3_1
 * @property integer $p3_2
 * @property integer $p3_3
 * @property integer $p3_4
 * @property integer $p4
 * @property integer $p5
 * @property integer $p6
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['persona_id', 'p1', 'p2_1', 'p2_2', 'p2_3', 'p3_1', 'p3_2', 'p3_3', 'p3_4', 'p4', 'p5', 'p6'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'persona_id' => 'Persona ID',
            'p1' => 'P1',
            'p2_1' => 'P2 1',
            'p2_2' => 'P2 2',
            'p2_3' => 'P2 3',
            'p3_1' => 'P3 1',
            'p3_2' => 'P3 2',
            'p3_3' => 'P3 3',
            'p3_4' => 'P3 4',
            'p4' => 'P4',
            'p5' => 'P5',
            'p6' => 'P6',
        ];
    }
}
