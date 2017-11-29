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
     * @return \think\response\View
     */
    public function confList()
    {
        // 获取配置所有数据
        $confRes = db('webset')->select();
        // 获取网站基本信息
        $baseInfo = db('webset')->where('cf_type', 1)->select();
        // 获取联系方式
        $ways = db('webset')->where('cf_type', 2)->select();
        // seo 信息
        $seo = db('webset')->where('cf_type', 3)->select();
        //halt($baseInfo);
        $this->assign([
            'confRes'  => $confRes,
            'baseInfo' => $baseInfo,
            'ways'     => $ways,
            'seo'      => $seo,
        ]);
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
