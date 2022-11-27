<?php
use app\models\Guide;
use app\models\GuideSerach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
/* @var $this yii\web\View */
/* @var $guides common\models\Guide */
?>
<div class="site-index" style=" ">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4" style="font-size: 32px;margin-top: 32px">Гайды</h1>
<div class="body-content" style="display: flex; flex-direction: column;">
    <div class="row" style=" width: 1000px;margin: 0 auto">
            <?php ;
            foreach ($guides as $row){?>
                <div class="col-lg-4" style="display: flex; flex-direction: column;  background-color: lightgray; text-align: left;align-items: center; width: 1000px;  margin-left: 0px; align-items: center; margin: 0 auto; margin-bottom: 50px;">
                    <h2 style="font-size: 24px; margin-top: 32px"><?=$row->title?></h2>
                    <p style="font-size: 14px; width: 300px; text-align: left;margin-bottom:0"> <?=$row->text?></p>
                    <div style="display: flex; justify-content: space-between">
                        <p style="margin-right: 50px"><?=$row->created_at?><br></p>
                        <p style="font-size: 14px; margin: 0 auto"><?=$row->username?></p>
                    </div>
        </div>
            <?}?>
        </div>
        </div>

