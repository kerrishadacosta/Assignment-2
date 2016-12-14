<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\registrationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="registration-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Registration', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'First_Name:ntext',
            'Last_Name:ntext',
            'DOB',
            'Gender:ntext',
            // 'Email:ntext',
            // 'Address:ntext',
            // 'Industry:ntext',
            // 'Location:ntext',
            // 'About_me:ntext',
            // 'Professional_Title:ntext',
            // 'Career_Level',
            // 'Communication_Level',
            // 'JobRelated_Level',
            // 'Organization_Level',
            // 'Phone_Number',
            // 'Website:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
