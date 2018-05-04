<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblEmpresa */

$this->title = 'Update Tbl Empresa: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->empr_id, 'url' => ['view', 'id' => $model->empr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-empresa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
