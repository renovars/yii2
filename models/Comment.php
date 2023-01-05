<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\web\Response;

class Comment extends \yii\db\ActiveRecord
{
    public static function tableName() : string
    {
        return '{{comments}}';
    }

    public function getProfile() : ActiveQuery
    {
        return $this->hasOne(Profile::class, ['user_id' => 'author_id']);
    }

    public function getUser() : ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'author_id']);
    }
}