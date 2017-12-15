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
        // $data = $this->order('cate_sort desc,cate_id')->select();
        // 链表查询模型名称
        $data = db('cate')->alias('c')->field('c.*,m.model_name')->join('tp_model m', 'c.model_id=m.model_id')->order('cate_sort desc')->select();
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
        // 验证数据,添加数据
        $result = $this->validate('Category.store')->save($data);
        if ($result === false) {
            return ['valid' => 0, 'msg' => $this->getError()];
        } else {
            return ['valid' => 1, 'msg' => '操作成功'];
        }
    }

    /**
     * 获取子集栏目数据，不包含自己
     * @param $id
     * @return array
     */
    public function getSonIds ($id)
    {
        // 获取所有id和pid
        $data = $this->field('cate_id,cate_pid')->select();
        // 获取子集栏目数据
        $ids = $this->getSon($data, $id);
        // 输出数据
        return $ids;
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

    /**
     * 编辑栏目操作
     * @param $data
     * @return array
     */
    public function edit ($data)
    {
        // 验证数据
        // 添加数据
        $result = $this->validate('Category.edit')->save($data, ['cate_id'=> $data['cate_id']]);
        //halt($result);
        if ($result === false) {
            return ['valid' => 0, 'msg' => $this->getError()];
        } else {
            return ['valid' => 1, 'msg' => '操作成功'];
        }
    }

    /**
     * 编辑获取所有栏目数据
     * @param $id
     * @return mixed
     */
    public function getCate ($id)
    {
        $data = $this->db('cate')->select();
        // 获取子集数据
        $cateId = $this->getSon($data, $id);
        // 将自己追加进去
        $cateId[] = $id;
        // 查找自己及子集数据之外的数据
        $result = db('cate')->whereNotIn('cate_id', $cateId)->select();
        // 变更成树形结构
        return Arr::tree($result, 'cate_name', 'cate_id', 'cate_pid');
    }
}
