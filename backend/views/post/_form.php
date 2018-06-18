<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Poststatus;

/* @var $this yii\web\View */
/* @var $model common\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textarea(['rows' => 6]) ?>

    
    <?php
    //数组助手类测试； 
        // $arr= Poststatus::find()->all();
        // $allStuatus=\yii\helpers\ArrayHelper::map($arr,'id','name');
        // var_dump($allStuatus);


//  构建查询测试：
        // $allStuatus=(new \yii\db\Query())
        // ->select(['name','id'])
        // ->from('postStatus')
        // ->indexBy('id')
        // ->column();
        // var_dump($allStuatus);


//  最常用的方法：
        $allStuatus = Poststatus::find()
        ->select(['name','id'])
        ->from('postStatus')
        ->indexBy('id')
        ->column();
        var_dump($allStuatus);

    //$form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
