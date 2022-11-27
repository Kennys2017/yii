<?php
/** @var yii\web\View $this */
/* @var $this yii\web\View */
/* @var $guides common\models\Guide */
$this->title = 'DotaHelp';
?>
<head>
<link href="style.css" rel="stylesheet">
</head>
<div class="site-index" style=" ">
    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4" style="font-size: 32px;margin-top: 32px">Новости</h1>

   </div>
    <div class="body-content" style="display: flex; flex-direction: column">

        <div class="row" style="margin-right: 1000px; width: 1000px;margin: 0 auto">
            <?php $i = 0;
            foreach ($guides as $row){
                $i++;
            if($i>3){ break;}?>
            <div class="col-lg-4" style="display: flex; flex-direction: column;  background-color: lightgray; text-align: left;align-items: center; width: 1000px; align-items: center; margin: 0 auto; margin-bottom: 50px;">
                <h2 style="font-size: 24px; margin-top: 32px"><?=$row->title?></h2>
               <p style="font-size: 14px; width: 300px; text-align: left;margin-bottom:0"> <?=$row->text?></p>
                <div style="display: flex; justify-content: space-between">
                    <p style="margin-right: 50px"><?=$row->created_at?><br></p>
                <p style="font-size: 14px; margin: 0 auto"><?=$row->username?></p>
            </div>

        </div>
        </div>
            <?}?>
        </div>
    </div>
