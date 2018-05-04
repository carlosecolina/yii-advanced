<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblEmpresa */

$this->title = 'Create Tbl Empresa';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Empresas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-empresa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
