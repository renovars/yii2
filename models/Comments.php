<?php

namespace app\models;

class Comments extends \yii\db\ActiveRecord
{
    public function getProfile()
    {
        return $this->hasOne(Profile::class, ['user_id' => 'author_id']);
    }
}