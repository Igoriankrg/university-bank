<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Transaction */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'invoice_id')->textInput() ?>

    <?= $form->field($model, 'bank_account')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput() ?>

    <?= $form->field($model, 'creditCardNumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateStart')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dateExpiration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ownerName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cvc')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
