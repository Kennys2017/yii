<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Guide $model */

$this->title = '' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Создать гайд', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="guide-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
