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
    protected $rule = [
        'cname' => 'require',
        'ename' => 'require',
    ];
    protected $message = [
        'cname.require' => '请输入配置中文名称',
        'ename.require' => '请输入配置英文名称',
    ];
}