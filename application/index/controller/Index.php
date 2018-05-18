<?php
namespace app\index\controller;
use app\index\controller\Base;
class Index extends Base
{
    public function index()
    {
    	//var_dump(dirname($_SERVER['SCRIPT_NAME']));die;
    	$articleres=db('article')->order('id desc')->paginate(9);
    	//print_r($articleres);die;
    	$this->assign('articleres',$articleres);
        return $this->fetch();
    }
          

}
