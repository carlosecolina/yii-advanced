<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_tipo_empresa".
 *
 * @property int $tiem_id
 * @property string $tiem_codigo
 * @property string $tiem_nombre
 *
 * @property TblEmpresa[] $tblEmpresas
 */
class TblTipoEmpresa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_tipo_empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tiem_codigo', 'tiem_nombre'], 'required'],
            [['tiem_codigo', 'tiem_nombre'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'tiem_id' => 'Tiem ID',
            'tiem_codigo' => 'Tiem Codigo',
            'tiem_nombre' => 'Tipo de empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblEmpresas()
    {
        return $this->hasMany(TblEmpresa::className(), ['tiem_id' => 'tiem_id']);
    }
}
