<?php

namespace app\admin\controller;

use app\admin\model\Models as ModelsModel;
use think\Db;

/**
 * 模型管理控制器类
 * Class Models
 * @package app\admin\controller
 */
class Models extends Base
{
    /**
     * 模型首页显示
     * @return \think\response\View
     */
    public function index(ModelsModel $models)
    {
        // 获取所有的模型数据
        $lists = db('model')->order('model_id desc')->paginate();
        // 数据表前缀
        $prefix = config('database.prefix');
        $this->assign('lists', $lists);
        $this->assign('prefix', $prefix);
        // 显示模板
        return view('index');
    }

    /**
     * 添加模型
     * @param ModelsModel $models
     * @return string|\think\response\View
     */
    public function store(ModelsModel $models)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res  = $models->store($data);
            if ($res['valid']) {
                return alert($res['msg'], url('index'));
            } else {
                return alert($res['msg'], url('store'), 5);
            }
        }
        return view('store');
    }

    /**
     * ajax 动态修改模型状态
     * @return int
     */
    public function changeStatus()
    {
        $id = input('param.id');
        // 查询数据库中当前栏目状态
        $modelAttr = db('model')->where('model_id', $id)->value('model_status');
        if ($modelAttr == 1) {
            db('model')->where('model_id', $id)->update(['model_status' => 0]);
            return 1;
        } else {
            db('model')->where('model_id', $id)->update(['model_status' => 1]);
            return 0;
        }
    }

    /**
     * ajax 删除数据, 同时删除数据表
     * @return int
     */
    public function delete()
    {
        $id = input('param.id');
        // 删除数据表，先行查找当前数据中的附加表
        $table_name = db('model')->where('model_id', $id)->value('table_name');
        $table_name = config('database.prefix') . $table_name;
        // 原生sql 删除数据表
        $sql = "DROP TABLE {$table_name}";
        // 执行删除
        $del = Db::execute($sql);
        // 删除数据
        $res = db('model')->where('model_id', $id)->delete();
        if ($res && $del === 0) {
            return 1;
        }else {
            return 0;
        }
    }
}
