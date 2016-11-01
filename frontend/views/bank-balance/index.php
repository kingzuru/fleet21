<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BankBalanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Bank Balances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bank-balance-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Bank Balance', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'bank_balance_id',
            'bank.bank',
            'start_date',
            'end_date',
            'opening_balance',
            'closing_balance',
            // 'notes:ntext',
            // 'creator_id',
            // 'create_date',
            // 'updater_id',
            // 'update_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
