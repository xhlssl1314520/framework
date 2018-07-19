<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\Msg;

class MsgController extends Controller
{
    public $layout = false;

    //关闭csrf攻击
    public $enableCsrfValidation = false;

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

    //添加
    public function actionAdd()
    {
        #步骤1：判断请求方式
        if (Yii::$app->request->isPost) {
            #步骤2：接受数据
            $uname = Yii::$app->request->post('uname');
            $content = Yii::$app->request->post('content');
            #步骤3：插入数据
            $msg = new Msg;
            $msg->uname = $uname;
            $msg->content = $content;
            $msg->created_at =  $msg->updated_at = time();
            $rs = $msg->save();
            #步骤4：判断跳转
            return $this->redirect(['/msg']);
        }   
    }
}
