<?php

namespace app\admin\validate;

use think\Validate;

/**
 * 字段管理验证控制器
 * Class Fields
 * @package app\admin\validate
 */
class Fields extends Validate
{
    protected $rule
        = [
            'field_ename' => 'require|unique:field',
            'field_cname' => 'require|unique:field',
            'field_type'  => 'require',
            'model_id'    => 'require',
        ];

    protected $message
        = [
            'field_ename.require' => '字段英文名称不得为空',
            'field_ename.unique'  => '字段英文名称不得重复',
            'field_cname.require' => '字段中文名称不得为空',
            'field_cname.unique'  => '字段中文名称不得重复',
            'field_type.require'  => '字段类型不得为空',
            'model_id.require'    => '模型不得为空',
        ];

    protected $scene
        = [
            'store' => ['field_ename', 'field_cname', 'field_type'],
            'edit'  => ['field_ename', 'field_cname', 'field_type'],
        ];
}