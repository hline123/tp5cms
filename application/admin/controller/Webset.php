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
    public function confList(WebsetModel $webset)
    {
        // 获取配置所有数据
        $confRes = db('webset')->select();
        /*
        // 获取网站基本信息
        $baseInfo = db('webset')->where('cf_type', 1)->select();
        // 获取联系方式
        $ways = db('webset')->where('cf_type', 2)->select();
        // seo 信息
        $seo = db('webset')->where('cf_type', 3)->select();
        // 查询所有需要分割的values数据
        // 单选
        $radios = db('webset')->where("dt_type=2")->select();
        //halt($radios);
        // 多选
        $checkboxes = db('webset')->where("dt_type=3")->select();
        // 下拉框
        $selects = db('webset')->where("dt_type=4")->select();
        // 将单选配置内容分割成数组
        $radio = [];
        foreach ($radios as $k => $v) {
            $radio[] = explode(',', $v['values']);
            foreach ($radio as $k1 => $v1) {

            }
        }
        // 将多选配置内容分割成数组
        $checkbox = [];
        $checkboxValue = [];
        foreach ($checkboxes as $k => $v) {
            $checkbox = explode(',', $v['values']);
            $checkboxValue = explode(',', $v['value']);
        }
        // 将下拉框配置内容分割成数组
        $selected    = [];
        foreach ($selects as $k => $v) {
            $selected    = explode(',', $v['values']);
        }
        */
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
