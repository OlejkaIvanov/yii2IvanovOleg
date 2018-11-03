<?php
/** @var \yii\widget\ActiveForm $form */
$form = \yii\widgets\ActiveForm::begin([]);
echo $form->field($model, 'title')->textInput();
echo $form->field($model, 'content')->textInput();
echo $form->field($model, 'image')->fileInput();
echo \yii\helpers\Html::submitButton('Загрузить');
\yii\widgets\ActiveForm::end();