<?php
// 声明命名空间 
namespace app\admin\controller;

// 引入系统类数据库
use think\Db;

// 引入系统控制器类
use think\Controller;
class User extends controller
{
    public function index()
    {
    	//return '我正在学习php';
    	
    	// 从数据库中读取数据
    	$data=Db::table('user')->select();
    	//var_dump($data);
    	
    	// 分配数据给页面
    	$this->assign('data',$data);
    	
    	return view();
    }
}