<?php

namespace app\admin\controller;

use app\admin\model\Fields as FieldsModel;
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
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 查询数据表
        // $lists = db('field')->select();
        // dump($lists);
        // 根据模型id，查询模型名称
        $lists = db('field')->alias('f')->join('model m', "f.model_id=m.model_id")->select();
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

    public function edit (FieldsModel $fields)
    {
        /*
        if (request()->isPost()) {
            $data = input('post.');
            $res = $fields->edit($data);
        }
        // 查询生成的模型
        $models = db('model')->field('model_id, model_name')->select();
        // 查询字段数据表
        $oldData = $fields->select();
         */
        $id = input('param.id');
        halt($id);
        // 显示模板
        return view('edit', compact('models'));
    }
}
