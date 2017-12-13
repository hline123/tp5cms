<?php

namespace app\admin\controller;

/**
 * 侧边栏菜单管理控制器
 * Class Menu
 * @package app\admin\controller
 */
class Menu extends Base
{

    public function index()
    {
        // 显示菜单列表
        return view('index');
    }
    public function read ()
    {

    }
    public function store ()
    {
        return view('store');
    }
}
