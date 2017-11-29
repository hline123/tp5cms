<?php

namespace app\admin\controller;

use app\admin\model\Webset as WebsetModel;

/**
 * 系统配置控制器类
 * Class Webset
 * @package app\admin\controller
 */
class Webset extends Base
{

    public function confList()
    {
        return view('confList');
    }

    /**
     * 配置列表操作
     * @return \think\response\View
     */
    public function index()
    {
        // 获取列表数据
        $lists = db('webset')->field('id,cname,ename,value,values')->order('id desc')->paginate();
        $this->assign('lists', $lists);
        return view('index');
    }

    /**
     * 添加系统配置
     * @param WebsetModel $webset
     * @return \think\response\View
     */
    public function store(WebsetModel $webset)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res  = $webset->store($data);
            if ($res['valid']) {
                $this->success($res['msg'], 'index');
            } else {
                $this->error($res['msg']);
            }
        }
        return view('store');
    }

    /**
     * 编辑系统配置
     * @param WebsetModel $webset
     * @return \think\response\View
     */
    public function edit(WebsetModel $webset)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res  = $webset->edit($data);
            if ($res['valid']) {
                $this->success($res['msg'], 'index');
            } else {
                $this->error($res['msg']);
            }
        }
        // 查询编辑数据
        $id = input('param.id');
        $field = db('webset')->find($id);
        $this->assign('field', $field);
        return view('edit');
    }

    /**
     * ajax删除配置操作
     * @return int
     */
    public function delete()
    {
        $id = input('param.id');
        if (WebsetModel::destroy($id)) {
            return 1;
        } else {
            return 0;
        }
    }
}
