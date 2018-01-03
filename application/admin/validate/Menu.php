<?php

namespace app\admin\validate;

use think\Validate;

/**
 * 模型管理验证器类
 * Class Models
 * @package app\admin\validate
 */
class Menu extends Validate
{
    protected $rule
        = [
            'menu_title' => 'require',
            //'menu_url'  => 'require|unique:menu',
            'menu_url'  => 'require',
            'menu_icon'  => 'require',
            'meun_pid'   => 'require',
        ];

    protected $message
        = [
            'menu_title.require' => '菜单名称不得为空',
            //'menu_url.require'  => '菜单标识不得为空',
            'menu_url.unique'   => '菜单标识不得重复',
            'menu_icon.require'  => '菜单图标不得为空',
            'meun_pid.require'   => '上级菜单不得为空',
        ];

    protected $scene
        = [
            'store' => ['menu_title', 'menu_url', 'menu_icon', 'menu_pid'],
            'edit'  => ['menu_title', 'menu_url', 'menu_icon', 'menu_pid'],
        ];
}