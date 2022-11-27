<?php
/* @var $this yii\web\View */
/* @var $guide common\models\Guide */
?>
<h1><?=$guide->title?></h1>
<?=$guide->text?>
<div style="display: flex; justify-content: space-between">
    <p><?=$guide->created_at?></p>
    <p style="font-size: 14px; margin: 0 auto"><?=$guide->username?></p>
</div>
