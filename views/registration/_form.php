<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\registration */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registration-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'First_Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Last_Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'DOB')->textInput() ?>

    <?= $form->field($model, 'Gender')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Industry')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Location')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'About_me')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Professional_Title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Career_Level')->textInput() ?>

    <?= $form->field($model, 'Communication_Level')->textInput() ?>

    <?= $form->field($model, 'JobRelated_Level')->textInput() ?>

    <?= $form->field($model, 'Organization_Level')->textInput() ?>

    <?= $form->field($model, 'Phone_Number')->textInput() ?>

    <?= $form->field($model, 'Website')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
