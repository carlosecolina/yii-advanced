<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_empresa".
 *
 * @property string $empr_id
 * @property string $empr_nombre
 * @property string $empr_descripcion
 * @property int $tiem_id
 * @property int $ciud_id
 * @property int $usua_id
 *
 * @property TblCiudad $ciud
 * @property TblTipoEmpresa $tiem
 * @property TblUsuario $usua
 */
class TblEmpresa extends \yii\db\ActiveRecord
{
    
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_empresa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empr_nombre', 'empr_descripcion', 'tiem_id', 'ciud_id', 'usua_id'], 'required'],
            [['empr_nombre', 'empr_descripcion'], 'string'],
            [['tiem_id', 'ciud_id', 'usua_id'], 'default', 'value' => null],
            [['tiem_id', 'ciud_id', 'usua_id'], 'integer'],
            //[['ciud_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblCiudad::className(), 'targetAttribute' => ['ciud_id' => 'ciud_id']],
            //[['tiem_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblTipoEmpresa::className(), 'targetAttribute' => ['tiem_id' => 'tiem_id']],
            //[['usua_id'], 'exist', 'skipOnError' => true, 'targetClass' => TblUsuario::className(), 'targetAttribute' => ['usua_id' => 'usua_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'empr_id' => 'Empr ID',
            'empr_nombre' => 'Empr Nombre',
            'empr_descripcion' => 'Empr Descripcion',
            'tiem_id' => 'Tiem ID',
            'ciud_id' => 'Ciud ID',
            'usua_id' => 'Usua ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCiud()
    {
        return $this->hasOne(TblCiudad::className(), ['ciud_id' => 'ciud_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiem()
    {
        return $this->hasOne(TblTipoEmpresa::className(), ['tiem_id' => 'tiem_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsua()
    {
        return $this->hasOne(TblUsuario::className(), ['usua_id' => 'usua_id']);
    }
}
