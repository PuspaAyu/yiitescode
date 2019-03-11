<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bonus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bonus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'month')->textInput() ?>

    <?= $form->field($model, 'year')->textInput() ?>

    <?= $form->field($model, 'salary')->textInput() ?>

    <!-- <?= $form->field($model, 'bonus')->textInput() ?> -->

    <!-- <?= $form->field($model, 'total')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
