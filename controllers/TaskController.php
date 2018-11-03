<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\tables\Users;
use app\models\Test;
use yii\web\Controller;
use yii\web\UploadedFile;


class TaskController extends Controller
{
    public function actionIndex()
    {
        $model = new Test();

        $model->load([
            'hsdghj' => [
                'title' => '23234',
                'content' => 'sk454443jgkfjkgjdkl'
            ],
            'Test' => [
                'title' => 'dkjfkldfjg',
                'content' => 'skjgkfjkgjdkl'
            ]
        ]);
    }

    public function actionTest()
    {
        $model = new Test();
        if (\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());
            $model->image = UploadedFile::getInstance($model, 'image');
            $model->upload();
            exit;
        }
        return $this->render('test', ['model' => $model]);

    }
}