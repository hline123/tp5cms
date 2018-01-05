<?php

namespace app\admin\controller;

use app\admin\model\Fields as FieldsModel;
use think\Db;

/**
 * 字段管理控制器类
 * Class Fields
 * @package app\admin\controller
 */
class Fields extends Base
{
    /**
     * 字段列表显示
     * @return \think\response\View
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 查询数据表
        // $lists = db('field')->select();
        // dump($lists);
        // 根据模型id，查询模型名称
        $lists = db('field')->alias('f')->join('model m', "f.model_id=m.model_id")->paginate();
        // 显示模板
        return view('index', compact('lists'));
    }

    /**
     * 添加模型字段操作
     * @param FieldsModel $fields
     * @return string|\think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function store (FieldsModel $fields)
    {
        if (request()->isPost()) {
            // 接收数据
            $data = input('post.');
            $res = $fields->store($data);
            if ($res['valid']) {
                return alert($res['msg'], url('index'), 6);
            }else {
                return alert($res['msg'], url('store'), 5);
            }
        }
        // 查询生成的模型
        $models = db('model')->field('model_id, model_name')->select();
        // 显示模板
        return view('store', compact('models'));
    }

    /**
     * 编辑数据
     * @param FieldsModel $fields
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function edit (FieldsModel $fields)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res = $fields->edit($data);
            if ($res['valid']) {
                return alert($res['msg'], url('index'), 6);
            }else {
                return alert($res['msg'], url('edit'), 5);
            }
        }
        // 查询生成的模型
        $models = db('model')->field('model_id, model_name')->select();
        // 查询字段数据表
        $id = input('param.id');
        $fields = \db('field')->find($id);
        $this->assign([
            'models' => $models,
            'field' => $fields,
        ]);
        // 显示模板
        return view('edit');
    }

    /**
     * ajax 异步删除字段
     */
    public function delete ()
    {
        // 接收数据ID
        $id = input('param.id');
        // 获取数据表前缀
        $prefix = config('database.prefix');
        // 查询相应的字段数据信息
        $data = db('field')->field('f.field_ename,m.table_name')->alias('f')->join('tp_model m', 'f.model_id=m.model_id')->find($id);
        $tableName = $prefix . $data['table_name'];
        $fieldName = $data['field_ename'];
        // 删除field中的数据
        $del = db('field')->delete($id);
        // 删除相应表的字段
        $sql = "ALTER TABLE {$tableName} DROP {$fieldName}";
        Db::execute($sql);
        if ($del) {
            return 1;
        }else {
            return 0;
        }
    }
}
