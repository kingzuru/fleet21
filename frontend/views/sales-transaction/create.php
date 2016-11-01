<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SalesTransaction */

$this->title = 'Create Sales Transaction';
$this->params['breadcrumbs'][] = ['label' => 'Sales Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-transaction-create">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
