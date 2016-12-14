<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\registrationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="registration-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'First_Name') ?>

    <?= $form->field($model, 'Last_Name') ?>

    <?= $form->field($model, 'DOB') ?>

    <?= $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Industry') ?>

    <?php // echo $form->field($model, 'Location') ?>

    <?php // echo $form->field($model, 'About_me') ?>

    <?php // echo $form->field($model, 'Professional_Title') ?>

    <?php // echo $form->field($model, 'Career_Level') ?>

    <?php // echo $form->field($model, 'Communication_Level') ?>

    <?php // echo $form->field($model, 'JobRelated_Level') ?>

    <?php // echo $form->field($model, 'Organization_Level') ?>

    <?php // echo $form->field($model, 'Phone_Number') ?>

    <?php // echo $form->field($model, 'Website') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
