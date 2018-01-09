<?php

namespace app\admin\model;

use think\Model;

class Archives extends Model
{
    //定义主键
    protected $pk = 'id';
    // 定义数据表
    protected $table = 'tp_archives';

    public function getCateData ()
    {
        $cate = new Category();
        return $cate->getAll();
    }
}
