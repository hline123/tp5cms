<?php
namespace app\admin\controller;

/**
 * 后台首页控制器类
 * Class Index
 * @package app\admin\controller
 */
class Index extends Base
{
    /**
     * 首页显示
     * @return \think\response\View
     */
    public function index()
    {
        return view('index');
    }
}
