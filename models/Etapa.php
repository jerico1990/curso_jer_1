<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etapa".
 *
 * @property integer $id
 * @property integer $persona_id
 * @property integer $etapa
 * @property integer $estado
 * @property string $fecha_inicio
 * @property string $fecha_finalizado
 */
class Etapa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etapa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id'], 'required'],
            [['id', 'persona_id', 'etapa', 'estado'], 'integer'],
            [['fecha_inicio', 'fecha_finalizado'], 'safe'],
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
            'etapa' => 'Etapa',
            'estado' => 'Estado',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_finalizado' => 'Fecha Finalizado',
        ];
    }
}
