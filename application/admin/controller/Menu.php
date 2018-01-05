<?php

namespace app\admin\controller;

use app\admin\model\Menu as MenuModel;

/**
 * 侧边栏菜单管理控制器
 * Class Menu
 * @package app\admin\controller
 */
class Menu extends Base
{

    public function index(MenuModel $menu)
    {
        // 查询所有数据
        $lists = $menu->getAll();
        // 显示菜单列表
        return view('index', compact('lists'));
    }

    /**
     * 添加侧边栏菜单
     * @param MenuModel $menu
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function store(MenuModel $menu)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res = $menu->store($data);
            if ($res['valid']) {
                $this->success($res['msg'], 'index');
            } else {
                $this->error($res['msg']);
            }
        }
        // 查询所有菜单
        $menus = $menu->getMenus();
        return view('store', compact('menus'));
    }

    public function edit(MenuModel $menu)
    {
        if (request()->isPost()) {
            $data = input('post.');
//            halt($data);
            $res = $menu->edit($data);
            if ($res['valid']) {
                $this->success($res['msg'], 'index');
            } else {
                $this->error($res['msg']);
            }
        }
        $id = input('param.id');
        $field = db('menu')->where('menu_id', $id)->find();
        // 查询所有菜单
        $menus = $menu->getMenus();
        $this->assign('menus', $menus);
        $this->assign('field', $field);
        return view('edit');
    }
}
