<?php

namespace app\models;

use yii\db\ActiveQuery;

class Profile extends \yii\db\ActiveRecord
{
    public function getUsers() : ActiveQuery
    {
        return $this->hasOne(Users::class, ['id' => 'user_id']);
    }
}