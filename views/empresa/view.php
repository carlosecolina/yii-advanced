<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $model app\models\TblEmpresa */

//$this->title = $model->empr_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-empresa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       
    </p>

    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    
    'columns' => [
        'empr_nombre',
        'empr_descripcion',
        'tiem_nombre',
         [
            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
            'label' => 'Ciudad',

            'value' => function ($dataProvider) {
                return $dataProvider['ciud_nombre']; // $data['name'] for array data, e.g. using SqlDataProvider.
            },
        ],
    ],
    
    
]); ?>

</div>
