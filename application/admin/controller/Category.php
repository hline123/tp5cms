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
    public function index(CategoryModel $category)
    {
        //输出栏目列表
        $lists = $category->getAll();
        //halt($lists);
        $this->assign('lists', $lists);
        return view('index');
    }

    /**
     * 添加栏目
     * @param CategoryModel $category
     * @return \think\response\View
     */
    public function store (CategoryModel $category)
    {
        // 接收栏目添加信息
        if (request()->isPost()) {
            $data = input('post.');
            $res = $category->store($data);
            if ($res['valid']) {
                $this->success($res['msg'], 'index');
            } else {
                $this->error($res['msg']);
            }
        }
        // 获取栏目数据
        $_cateRes = $category->getAll();
        $this->assign('cateRes', $_cateRes);
        return view('store');
    }

    /**
     * ajax 处理文件上传
     * @return string
     */
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

    /**
     * ajax 改变栏目状态
     * @return int
     */
    public function changeStatus()
    {
        $id = input('param.id');
        $cateAttr = db('cate')->where('cate_id', $id)->value('cate_status');
        if ($cateAttr == 1) {
            db('cate')->where('cate_id', $id)->update(['cate_status'=>0]);
            return 1;
        }else {
            db('cate')->where('cate_id', $id)->update(['cate_status'=>1]);
            return 0;
        }
    }

    /**
     * ajax 排序
     * @return int
     */
    public function changeSort ()
    {
        if (request()->isAjax()) {
            $data = input('param.');
            $result = db('cate')->where('cate_id', $data['id'])->update(['cate_sort'=>$data['cate_sort']]);
            if ($result !== false) {
                // 倒序排列
                return 1;
            }
        }
    }
    public function delete()
    {
        //
    }
}
