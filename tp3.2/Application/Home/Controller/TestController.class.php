<?php
namespace Home\Controller;

use Think\Controller;

class TestController extends Controller
{
    public function index()
    {
//        $res=M('t2')->select();
//        echo "<pre>";
//        var_dump($res);

        #插入数据
        $res=M('t2')->add([
            'uname'=>str_shuffle('sdfas'),
            'pwd'=>str_shuffle('213')

        ]);
        var_dump($res);
    }
}