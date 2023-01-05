<?php

namespace app\models;

use yii\db\ActiveQuery;

class Users extends \yii\db\ActiveRecord
{
    public function getComments() : ActiveQuery
    {
        return $this->hasMany(Comments::class, ['author_id' => 'id']);
    }

    public function getProfile() : ActiveQuery
    {
        return $this->hasOne(Profile::class, ['user_id' => 'id']);
    }
}