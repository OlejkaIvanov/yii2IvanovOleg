<?php


namespace app\models;
use yii\base\Model;

class Test extends Model
{
    public $title;
    public $content;
    public $image;

    public function rules ()
    {
        return [
            [['image'], 'file', 'extensions' => 'jpg, png'],
            [['content', 'title'], 'safe']
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $filename = $this->image->getBaseName() . "." . $this->image->getExtension();
            return $this->image->saveAS(\Yii::getAlias('@webroot/img/') . $filename);
        }
        return false;
    }
}