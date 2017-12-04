<?php

namespace app\admin\controller;

use app\admin\model\Category as CategoryModel;

/**
 * 栏目管理控制器类
 * Class Category
 * @package app\admin\controller
 */
class Category extends Base
{
    /**
     * 栏目首页处理
     * @return \think\response\View
     */
    public function index()
    {
        //输出栏目列表
        $lists = [];
        $this->assign('lists', $lists);
        return view('index');
    }

    public function store (CategoryModel $category)
    {
        // 接收栏目添加信息eee
        if (request()->isPost()) {
            $data = input('post.');
            $res = $category->store($data);
            if ($res['valid']) {
                $this->success($res['msg'], 'index');
            } else {
                $this->error($res['msg']);
            }
        }
        return view('store');
    }
    public function upImg ()
    {
        // 获取上传文件
        $file = $this->request->file('cate_thumb');
        // halt($file);
        // 移动文件
        if (!$file) {
            return json_encode(['valid'=>0, 'msg' => '上传文件不存在']);
        }
        // 移动至uploads/category目录下
        $info = $file->validate(['size'=>3000000,'ext'=>'jpg,png,gif'])->move(ROOT_PATH . 'public/uploads/category');
        // 判断处理文件
        if ($info) {
            $data = $info->getSaveName();
            // 返回文件信息
            //db('cate')->insert(['cate_thumb' => $data]);
            $path = config('uploadPath'). 'category/' . $info->getSaveName();
            //halt($path);
            return json_encode(['valid'=>1, 'msg'=> $path]);
        }else {
            return json_encode(['valid'=>0, 'msg'=> $file->getError()]);
        }
    }
    public function delete()
    {
        //
    }
}
