<?php

namespace app\modules\v1\controllers;

use yii\web\Controller;
use yii\rest\ActiveController;

class DefaultController extends ActiveController
{
    public $modelClass = 'app\models\User';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
