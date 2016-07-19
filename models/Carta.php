<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carta".
 *
 * @property integer $id
 * @property integer $persona_id
 */
class Carta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['persona_id','check'], 'integer'],
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
        ];
    }
}
