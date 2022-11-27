<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
/** @var yii\web\View $this */
/** @var app\models\Guide $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="guide-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?=$form->field($model, 'text')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 100,
            'formatting' =>['p', 'blockquote', 'h2', 'h1'] ,
            'imageUpload' => \yii\helpers\Url::to(['/guide/save-redactor-img','sub' =>'guide']),
            'plugins' => [
                'clips',
                'fullscreen',
                ]
            ]
            ])?>
    <?= $form->field($model, 'hero')->textInput(['maxlength' =>true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Добавить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
