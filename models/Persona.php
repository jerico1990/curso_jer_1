<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $id
 * @property string $nombres
 * @property string $paterno
 * @property string $materno
 * @property integer $tipo_documento
 * @property string $nro_documento
 * @property string $correo_electronico
 * @property string $celular
 * @property string $telefono
 * @property integer $institucion_id
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $institucion;
    public $clave;
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['nombres', 'paterno', 'materno','nro_documento','correo_electronico'], 'required'],
            [['id', 'tipo_documento', 'institucion_id'], 'integer'],
            [['nombres', 'paterno', 'materno'], 'string', 'max' => 250],
            [['nro_documento'], 'string', 'max' => 15],
            [['correo_electronico'], 'string', 'max' => 150],
            [['clave'], 'string', 'max' => 100],
            [['celular'], 'string', 'max' => 12],
            [[ 'telefono'], 'string', 'max' => 13],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombres' => 'Nombres',
            'paterno' => 'Paterno',
            'materno' => 'Materno',
            'tipo_documento' => 'Tipo Documento',
            'nro_documento' => 'Nro Documento',
            'correo_electronico' => 'Correo Electronico',
            'celular' => 'Celular',
            'telefono' => 'Telefono',
            'institucion_id' => 'Institucion ID',
        ];
    }
}
