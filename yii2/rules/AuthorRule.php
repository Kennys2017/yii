<?php
namespace app\rbac;
use common\rbac\rules;
use app\models\Post;
use yii\rbac\Rule;

class AuthorRule extends Rule
{
    public $name = "isAuthor";

    public function execute($user, $item, $params): bool
    {
        if(isset($params['author_id']) and ($params['author_id'] == Yii::$app->user->id)){
            return true;
        } else {
            return false;
        }
    }
}
