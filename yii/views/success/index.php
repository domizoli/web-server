<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form Successes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form-success-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Form Success', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'phonenum',
            'email:email',
            'password',
            //'date',
            //'ip',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
