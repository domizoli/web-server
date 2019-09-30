<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FormSuccess */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-success-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'email2') ?>

    <?= $form->field($model, 'phonenum') ?>

    <?= $form->field($model, 'password')->input('password') ?>

    <?= $form->field($model, 'password2')->input('password') ?>

    <div class="col-md-6">
       <?= $form->field($model, 'aszf')->checkBox(['label' => 'ASZF']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
