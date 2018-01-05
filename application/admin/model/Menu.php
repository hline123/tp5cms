<?php

namespace app\admin\model;

use houdunwang\arr\Arr;
use think\Loader;
use think\Model;

/**
 * 菜单模型控制器类
 * Class Menu
 * @package app\admin\model
 */
class Menu extends Model
{
    protected $pk = 'menu_id';
    protected $table = 'tp_menu';

    /**
     * 树形查询所有数据
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getAll ()
    {
        // 查询所有数据
        $data = $this->select();
        // 形成树形数据结构
        $result = Arr::tree($data, 'menu_title',  $fieldPri = 'menu_id', $fieldPid = 'menu_pid');
        return $result;
    }

    /**
     * 获取所有栏目菜单数据
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getMenus ()
    {
        $menus = db('menu')->field('menu_id, menu_title, menu_pid')->select();
        $result = Arr::tree($menus, 'menu_title',  $fieldPri = 'menu_id', $fieldPid = 'menu_pid');
        return $result;
    }
    /**
     * 添加菜单操作
     * @param $data
     * @return array
     */
    public function store($data)
    {
        // 接收数据
        // halt($data);
        // 验证数据
        $validate = Loader::validate('Menu');
        if (!$validate->scene('store')->check($data)) {
            return ['valid' => 0, 'msg' => $validate->getError()];
        }
        // 添加数据
        $result = $this->save($data);
        if ($result) {
            return ['valid' => 1, 'msg' => '操作成功'];
        } else {
            return ['valid' => 0, 'msg' => '操作失败'];
        }
    }

    public function edit ($data)
    {

    }
}
