<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblEmpresaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-empresa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'empr_id') ?>

    <?= $form->field($model, 'empr_nombre') ?>

    <?= $form->field($model, 'empr_descripcion') ?>

    <?= $form->field($model, 'tiem_id') ?>

    <?= $form->field($model, 'ciud_id') ?>

    <?php // echo $form->field($model, 'usua_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
