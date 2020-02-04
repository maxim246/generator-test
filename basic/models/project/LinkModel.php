<?php

namespace app\models\project;

use yii\db\ActiveRecord;

/**
 * Class LinkModel
 * @package app\models\project
 */
class LinkModel extends ActiveRecord
{
    protected $user_link;
    protected $link;

    public static function tableName()
    {
        return 'links';
    }

    public function rules()
    {
        return [
            [['user_link', 'link'], 'required', 'message' => 'Заполните поле {attribute}.'],
            [['user_link', 'link'], 'string']
        ];
    }

}
