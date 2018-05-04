<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblEmpresa;

/**
 * TblEmpresaSearch represents the model behind the search form of `app\models\TblEmpresa`.
 */
class TblEmpresaSearch extends TblEmpresa
{


public $Ciud;
    public $Tiem;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empr_id', 'tiem_id', 'ciud_id', 'usua_id'], 'integer'],
            [['empr_nombre', 'empr_descripcion','Tiem','tiem_nombre'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblEmpresa::find()->joinWith('tiem',true);

        

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['attributes'=> ['empr_nombre', 'empr_descripcion','Tiem','tiem_id','tiem_nombre']    ]
        ]);

         

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'empr_id' => $this->empr_id,
            'tiem_id' => $this->tiem_id,
            'ciud_id' => $this->ciud_id,
            'usua_id' => $this->usua_id,
            'tiem_nombre' => $this->tiem,
        ]);

        $query->andFilterWhere(['ilike', 'empr_nombre', $this->empr_nombre])
            ->andFilterWhere(['ilike', 'empr_descripcion', $this->empr_descripcion])
            ->andFilterWhere(['ilike', 'tiem', $this->tiem]);

        return $dataProvider;
    }
}
