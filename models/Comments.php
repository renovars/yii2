<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\web\Response;

class Comments extends \yii\db\ActiveRecord
{
    public function getProfile() : ActiveQuery
    {
        return $this->hasOne(Profile::class, ['user_id' => 'author_id']);
    }

    public function getUsers() : ActiveQuery
    {
        return $this->hasOne(Users::class, ['id' => 'author_id']);
    }
}