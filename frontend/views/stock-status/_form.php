<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StockStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stock-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stock_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notes')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'record_status')->dropDownList([ 'active' => 'Active', 'inactive' => 'Inactive', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
