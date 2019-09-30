<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FormSuccess */

$this->title = 'Update Form Success: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Form Successes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form-success-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
