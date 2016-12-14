<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\registration */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Registrations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID], [
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
            'ID',
            'First_Name:ntext',
            'Last_Name:ntext',
            'DOB',
            'Gender:ntext',
            'Email:ntext',
            'Address:ntext',
            'Industry:ntext',
            'Location:ntext',
            'About_me:ntext',
            'Professional_Title:ntext',
            'Career_Level',
            'Communication_Level',
            'JobRelated_Level',
            'Organization_Level',
            'Phone_Number',
            'Website:ntext',
        ],
    ]) ?>

</div>
