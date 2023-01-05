<?php

namespace app\models;

use yii\db\ActiveQuery;

class User extends \yii\db\ActiveRecord
{
    public static function tableName() : string
    {
        return '{{users}}';
    }

    public function getComments() : ActiveQuery
    {
        return $this->hasMany(Comment::class, ['author_id' => 'id']);
    }

    public function getProfile() : ActiveQuery
    {
        return $this->hasOne(Profile::class, ['user_id' => 'id']);
    }
}