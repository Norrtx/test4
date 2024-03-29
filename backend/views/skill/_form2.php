<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\skill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skill-form">

    <?php $form = ActiveForm::begin(); ?>

    <?=  $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'score')->textInput() ?>

  
         
   

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
