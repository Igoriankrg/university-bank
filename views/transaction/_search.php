<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TransactionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="transaction-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'invoice_id') ?>

    <?= $form->field($model, 'bank_account') ?>

    <?= $form->field($model, 'amount') ?>

    <?= $form->field($model, 'creditCardNumber') ?>

    <?php // echo $form->field($model, 'dateStart') ?>

    <?php // echo $form->field($model, 'dateExpiration') ?>

    <?php // echo $form->field($model, 'ownerName') ?>

    <?php // echo $form->field($model, 'cvc') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
