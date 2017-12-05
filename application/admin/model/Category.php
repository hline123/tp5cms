<?php

namespace app\admin\model;

use houdunwang\arr\Arr;
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

    /**
     * 属性获取栏目所有数据
     * @return mixed
     */
    public function getAll()
    {
        // 获取栏目数据
        $data = $this->order('cate_sort desc,cate_id')->select();
        // 变更树形结构
        $result = Arr::tree($data, 'cate_name', 'cate_id', 'cate_pid');
        return $result;
    }

    /**
     * 添加栏目
     * @param $data
     * @return array
     */
    public function store($data)
    {
        // 验证数据
        // 添加数据
        $result = $this->save($data);
        if ($result) {
            return ['valid' => 1, 'msg' => '操作成功'];
        } else {
            return ['valid' => 0, 'msg' => 'error'];
        }
    }

    /**
     * 获取当前栏目id及子集栏目的id集合
     * @param $id
     * @return array
     */
    public function getCateChild($id)
    {
        // 获取所有id和pid
        $data = $this->field('cate_id,cate_pid')->select();
        // 获取子集栏目数据
        $ids = $this->getSon($data, $id);
        // 将其本身追加进去
        $ids[] = (int) $id;
        // 输出数据
        return $ids;
    }

    /**
     * 获取当前栏目的子集栏目数据
     * @param $data
     * @param $id
     * @return array
     */
    public function getSon ($data, $id)
    {
        static $arr = [];
        foreach ($data as $k => $v) {
            if ($v['cate_pid'] == $id) {
                $arr[] = $v['cate_id'];
                $this->getSon($data, $v['cate_id']);
            }
        }
        return $arr;
    }
}
