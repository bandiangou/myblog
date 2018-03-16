<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminLoginForm;

/**
 * Site controller
 */
class TestController extends Controller
{

    public function actionTest5(){

	echo 'test5';
    }
    

    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionTest2(){
        echo 'good';
    }

    

    public function actionTest4(){
        echo 'test4';
    }

    public function actionTest1(){
        echo 'hi';
    }
}
