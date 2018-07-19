<?php
namespace Home\Controller;

use Think\Controller;

class MsgController extends Controller
{
    public function index()
    {
        $msgs=M('msg')->select();
        $this->assign('msgs',$msgs);
        $this->display();
    }
    public function add()
    {
        if (IS_POST) {
            //接受数据
            $postData['uname']=I('post.uname');
            $postData['content']=I('post.content');
            $postData['created_at']= $postData['updated_at'] =time();

            //插入数据
            $res=M('msg')->add($postData);

            if ($res) {
                $this->success('插入成功',U('msg/index'));
            }else {
                $this->error('插入失败',U('msg/index'));
            }
        }
    }
}