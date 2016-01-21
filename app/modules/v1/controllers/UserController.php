<?php

namespace app\modules\v1\controllers;

//use yii\web\Controller;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'common\models\User';

    /*public function actionIndex()
    {
        return $this->render('index');
    }*/
}
