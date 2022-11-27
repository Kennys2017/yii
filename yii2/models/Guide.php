<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "guide".
 *
 * @property int $id
 * @property string $title
 * @property string $hero
 * @property string $text
 * @property string $username
 * @property string $created_at
 */
class Guide extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'guide';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'hero', 'text', 'username', 'created_at'], 'required'],
            [['text'], 'string'],
            [['created_at'], 'safe'],
            [['title', 'hero'], 'string', 'max' => 50],
            [['username'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'hero' => 'Герой',
            'text' => 'Содержание',
            'username' => 'Ник пользователя',
            'created_at' => 'Дата создания',
        ];
    }
}
