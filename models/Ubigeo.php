<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ubigeo".
 *
 * @property integer $id
 * @property string $department_id
 * @property string $province_id
 * @property string $district_id
 * @property string $department
 * @property string $province
 * @property string $district
 * @property double $latitude
 * @property double $longitud
 */
class Ubigeo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ubigeo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'department_id', 'district_id'], 'required'],
            [['id'], 'integer'],
            [['latitude', 'longitud'], 'number'],
            [['department_id'], 'string', 'max' => 2],
            [['province_id'], 'string', 'max' => 4],
            [['district_id'], 'string', 'max' => 6],
            [['department'], 'string', 'max' => 150],
            [['province', 'district'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'department_id' => 'Department ID',
            'province_id' => 'Province ID',
            'district_id' => 'District ID',
            'department' => 'Department',
            'province' => 'Province',
            'district' => 'District',
            'latitude' => 'Latitude',
            'longitud' => 'Longitud',
        ];
    }
}
