<?php

namespace app\admin\model;

use think\Model;

/**
 * 字段管理模型类
 * Class Fields
 * @package app\admin\model
 */
class Fields extends Model
{
    // 定义主键
    protected $pk = 'field_id';
    // 定义数据表
    protected $table = 'tp_field';
}
