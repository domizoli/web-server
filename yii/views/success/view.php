<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FormSuccess */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Successes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="form-success-view">
    <h1>Registration Successful!</h1>
    <!--<h2><?= Html::encode($this->title) ?></h2>
-->
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'phonenum',
            'email:email',
            'password',
            'date',
            'ip',
        ],
    ]) ?>

</div>
