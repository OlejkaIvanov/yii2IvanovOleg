<?php


namespace app\models;
use yii\Imagine\Filter\Save;
use yii\base\Model;
use yii\imagine\Image;


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
            $baseName = $this->image->getBaseName() . "." . $this->image->getExtension();
            $filename = '@webroot/img/' . $baseName;
            $this->image->saveAS(\Yii::getAlias($filename));
            Image::thumbnail($filename, 120, 120)
                ->save(\Yii::getAlias('@webroot/img/small' . $baseName));
        }
    }
}