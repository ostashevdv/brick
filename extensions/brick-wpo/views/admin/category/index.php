<?php

use yii\helpers\Html;
use yii\grid\GridView;
use arogachev\tree\widgets\NestedSets;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <div>
        <?= NestedSets::widget([
          'modelClass' => \brick\wpo\models\Category::className(),
        ]) ?>
    </div>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'slug',
            'description:ntext',
            'content:ntext',
            // 'status',
            // 'created_at',
            // 'published_at',
            // 'unpublished_at',
            // 'author_id',
            // 'redactor_id',
            // 'lft',
            // 'rgt',
            // 'depth',
            // 'tree',
            // 'extra',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
