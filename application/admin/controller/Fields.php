<?php

namespace app\admin\controller;

/**
 * 字段管理控制器类
 * Class Fields
 * @package app\admin\controller
 */
class Fields extends Base
{

    public function index()
    {
        // 显示模板
        return view('index');
    }

    public function store ()
    {
        if (request()->isPost()) {
            
        }
        // 显示模板
        return view('store');
    }
}
