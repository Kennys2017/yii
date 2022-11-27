<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Guide $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Просмотр гайда', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="guide-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <h1><?=Yii::$app->user->id?> (<?=Yii::$app->user->identity->username?>)</h1>
    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'id'=>'url', 'format'=>'raw',
            'title',
            'hero',
            'image',
            'text:ntext',
            'username',
            'created_at:datetime',
        ],
    ]) ?>

</div>
