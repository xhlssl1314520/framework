<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class TestController extends Controller
{
    public function actionIndex()
    {
        echo "index";
    }

    public function actionAdd()
    {
        echo "add";
    }
}
