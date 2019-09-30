<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'email') ?>
    
    <?= $form->field($model, 'email2') ?>

    <?= $form->field($model, 'phonenum') ?>

    <?= $form->field($model, 'password')->input('password') ?>

    <?= $form->field($model, 'password2')->input('password') ?>

    <div class="col-md-6">
         <?= $form->field($model, 'aszf')->checkBox(['label' => 'ASZF']) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>