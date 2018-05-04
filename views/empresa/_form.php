<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TblEmpresa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-empresa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'empr_nombre')->textInput() ?>

    <?= $form->field($model, 'empr_descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tiem_id')->textInput() ?>

    <?= $form->field($model, 'ciud_id')->textInput() ?>

    <?= $form->field($model, 'usua_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
