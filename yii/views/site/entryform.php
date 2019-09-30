<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->username) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
    <li><label>Confirm Email</label>: <?= Html::encode($model->email2) ?></li>
    <li><label>Phone Number</label>: <?= Html::encode($model->phonenum) ?></li>
    <li><label>Password</label>: <?= Html::encode($model->password) ?></li>
    <li><label>Confirm Password</label>: <?= Html::encode($model->password2) ?></li>
</ul>