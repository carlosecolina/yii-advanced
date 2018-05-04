<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\TblEmpresaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Empresas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-empresa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Empresa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'empr_id',
            'empr_nombre',
            'empr_descripcion:ntext',
            'tiem_id',
            'ciud_id',
            'tiem.tiem_nombre',
            //'usua_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
