<?php

namespace app\admin\validate;

use think\Validate;

/**
 * 模型管理验证器类
 * Class Models
 * @package app\admin\validate
 */
class Models extends Validate
{
    protected $rule
        = [
            'model_name'  => 'require|unique:model',
            'table_name'  => 'require|unique:model',
            'model_status' => 'require'
        ];

    protected $message
        = [
            'model_name.require' => '模型名称不得为空！',
            'model_name.unique'  => '模型名称不得重复！',
            'table_name.require' => '关联数据表不能为空！',
            'table_name.unique' => '关联数据表不得重复！',
            'model_status.require' => '模型状态不能为空！',
        ];

    protected $scene
        = [
            'store' => ['model_name', 'table_name', 'model_status'],
            'edit'  => ['model_name', 'table_name', 'model_status']
        ];
}