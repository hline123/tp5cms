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

    public function index()
    {
        // 显示模板
        return view('index');
    }

    /**
     * 添加模型字段
     * @param FieldsModel $fields
     * @return string|\think\response\View
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
}
