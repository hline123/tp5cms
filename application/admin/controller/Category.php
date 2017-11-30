<?php

namespace app\admin\controller;

use app\admin\model\Category as CategoryModel;

/**
 * 栏目管理控制器类
 * Class Category
 * @package app\admin\controller
 */
class Category extends Base
{
    /**
     * 栏目首页处理
     * @return \think\response\View
     */
    public function index()
    {
        //输出栏目列表
        $lists = [];
        $this->assign('lists', $lists);
        return view('index');
    }

    public function store (CategoryModel $category)
    {
        return view('store');
    }

    public function delete()
    {
        //
    }
}
