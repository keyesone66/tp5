<?php
namespace app\admin\controller;
use think\Controller;
class Base extends Controller
{
	//初始化
    public function _initialize(){
        if(!session('username')){
            $this->error('请先登录系统！','Login/index');
        }
    }
}
