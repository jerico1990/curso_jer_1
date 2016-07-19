<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "documento".
 *
 * @property integer $id
 * @property integer $persona_id
 * @property string $archivo1
 * @property string $archivo2
 * @property string $archivo3
 * @property string $archivo4
 * @property string $archivo5
 */
class Documento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file1,$file2,$file3,$file4,$file5;
    public static function tableName()
    {
        return 'documento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['persona_id'], 'integer'],
            [['archivo1', 'archivo2', 'archivo3', 'archivo4', 'archivo5'], 'string', 'max' => 150],
            [['file1','file2','file3','file4','file5'],'safe'],
            [['file1','file2','file3','file4','file5'],'file'],
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
            'archivo1' => 'Archivo1',
            'archivo2' => 'Archivo2',
            'archivo3' => 'Archivo3',
            'archivo4' => 'Archivo4',
            'archivo5' => 'Archivo5',
        ];
    }
}
