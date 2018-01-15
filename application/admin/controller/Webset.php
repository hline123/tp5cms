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
    /**
     * 显示配置操作
     * @param WebsetModel $webset
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function confList(WebsetModel $webset)
    {
        // 获取配置所有数据
        $confRes = db('webset')->select();
        //halt($confRes);
        $this->assign([
            'confRes'     => $confRes,
        ]);
        return view('confList');
    }

    /**
     * 修改展示的配置操作
     * @param WebsetModel $webset
     * @return string
     */
    public function confShow (WebsetModel $webset)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res = $webset->confAdd($data);
            if ($res['valid']) {
                return alert($res['msg'], url('confList'), 6, 3);
            } else {
                return alert($res['msg'], url('confList'), 5, 3);
            }
        }
    }

    /**
     * 配置列表操作
     * @return \think\response\View
     * @throws \think\exception\DbException
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
     * @return string|\think\response\View
     */
    public function store(WebsetModel $webset)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res  = $webset->store($data);
            if ($res['valid']) {
                return alert($res['msg'], url('index'), 6, 3);
            } else {
                return alert($res['msg'], url('store'), 5, 3);
            }
        }
        return view('store');
    }

    /**
     * 编辑系统配置
     * @param WebsetModel $webset
     * @return string|\think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function edit(WebsetModel $webset)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res  = $webset->edit($data);
            if ($res['valid']) {
                return alert($res['msg'], url('index'), 6, 3);
            } else {
                return alert($res['msg'], url('edit'), 5, 3);
            }
        }
        // 查询编辑数据
        $id    = input('param.id');
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
