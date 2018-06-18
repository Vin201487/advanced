<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Comment;

/* @var $this yii\web\View */
/* @var $model common\models\Comment */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
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
            'id',
            'content:ntext',
            //'status',
            [
                'label'=>'状态',
                'value'=>$model->status0->name

            ],
            //'create_time:datetime',
            [
                'attribute'=>'create_time',
                'format'=>['date','php:Y-m-d H:i:s']

            ],
            //'userid',
            [
                'label'=>'用户',
                'value'=>$model->user->username
            ],
            'email:email',
            'url:url',
            //'post_id',
            [
                'attribute'=>'post_id',
                'value'=>$model->post->title,
            ]
        ],
    ]) ?>

</div>
