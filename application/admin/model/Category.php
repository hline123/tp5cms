<?php

namespace app\admin\model;

use think\Model;

/**
 * 栏目模型控制器
 * Class Category
 * @package app\admin\model
 */
class Category extends Model
{
    //定义主键
    protected $pk = 'cate_id';
    // 定义数据表
    protected $table = 'tp_cate';

    public function store($data)
    {
        // 验证数据
        // 添加数据
        $result = $this->save($data);
        if ($result) {
            return ['valid'=> 1, 'msg'=> '操作成功'];
        }else {
            return ['valid'=>0, 'msg'=> 'error'];
        }
    }
}
