<?php

namespace app\models;

use yii\db\ActiveQuery;

class Profile extends \yii\db\ActiveRecord
{
    public function getUser() : ActiveQuery
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }
}