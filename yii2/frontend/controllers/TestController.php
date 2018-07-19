<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Msg;

class TestController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {

        
        #步骤1：获取留言表数据
        $msgs = Msg::find()->all();
        #步骤2：加载视图
        return $this->render('index', compact('msgs')); 

        

        // //echo 666;
        // //die;
        // //加载veiws目录下的test目录下的index.php文件
        // return $this->render('index', [
        //     'username' => '苍苍',
        //     'order' => [
        //         'a' => '啪啪啪',
        //         'b' => '哒哒哒'
        //     ],
        // ]);
        // return $this->render();
    }

    public function actionAdd()
    {

    }
}
