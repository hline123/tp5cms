<?php

namespace app\admin\validate;

use think\Validate;

/**
 * 系统配置数据验证控制器类
 * Class Webset
 * @package app\admin\validate
 */
class Webset extends Validate
{
    protected $rule
        = [
            'cname'   => 'require|unique:webset|max:60',
            'ename'   => 'require|unique:webset|max:60',
            'dt_type' => 'require|number',
            'cf_type' => 'require|number',
        ];
    protected $message
        = [
            'cname.require'   => '请输入配置中文名称',
            'cname.unique'    => '配置中文名称不能重复',
            'cname.max'       => '配置中文名称长度不得超过60个字符',
            'ename.require'   => '请输入配置英文名称',
            'ename.unique'    => '配置英文名称不能为空',
            'ename.max'       => '配置英文名称长度不得超过60个字符',
            'dt_type.require' => '配置选择类型不能为空',
            'dt_type.number'  => '配置选择类型必须为数字类型',
            'cf_type.require' => '配置分类不能为空',
            'cf_type.number'  => '配置分类必须为数字类型',
        ];
}