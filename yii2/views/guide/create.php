<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Guide $model */

$this->title = 'Создать гайд';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guide-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
