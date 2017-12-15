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
        $this->assign('lists', $lists);
        return view('index');
    }

    /**
     * ajax 改变栏目状态
     * @return int
     */
    public function changeStatus()
    {
        $id       = input('param.id');
        $cateAttr = db('cate')->where('cate_id', $id)->value('cate_status');
        if ($cateAttr == 1) {
            db('cate')->where('cate_id', $id)->update(['cate_status' => 0]);
            return 1;
        } else {
            db('cate')->where('cate_id', $id)->update(['cate_status' => 1]);
            return 0;
        }
    }

    /**
     * ajax 排序
     * @return int
     */
    public function changeSort()
    {
        if (request()->isAjax()) {
            $data   = input('param.');
            $result = db('cate')->where('cate_id', $data['id'])->update(['cate_sort' => $data['cate_sort']]);
            if ($result !== false) {
                // 倒序排列
                return 1;
            }
        }
    }

    /**
     * 添加栏目
     * @param CategoryModel $category
     * @return \think\response\View
     */
    public function store(CategoryModel $category)
    {
        // 接收栏目添加信息
        if (request()->isPost()) {
            $data = input('post.');
            $res  = $category->store($data);
            if ($res['valid']) {
//                $this->success($res['msg'], 'index');
                return alert($res['msg'], url('index'), 6, 3);
            } else {
//                $this->error($res['msg']);
                return alert($res['msg'], url('store'), 5, 3);
            }
        }
        // 添加子集数据时
        $_id = input('param.id');
        // 获取栏目数据
        $_cateRes = $category->getAll();
        // 获取模型数据
        $models = db('model')->field('model_id,model_name')->select();
        $this->assign('cateRes', $_cateRes);
        $this->assign('cateId', $_id);
        $this->assign('models', $models);
        return view('store');
    }

    /**
     * ajax 处理文件上传
     * @return string
     */
    public function upImg()
    {
        // 获取上传文件
        $file = $this->request->file('cate_thumb');
        // halt($file);
        // 移动文件
        if (!$file) {
            return json_encode(['valid' => 0, 'msg' => '上传文件不存在']);
        }
        // 移动至uploads/category目录下
        $info = $file->validate(['size' => 3000000, 'ext' => 'jpg,png,gif'])->move(ROOT_PATH . 'public/uploads/category');
        // 判断处理文件
        if ($info) {
            $data = $info->getSaveName();
            // 返回文件信息
            //db('cate')->insert(['cate_thumb' => $data]);
            $path = config('uploadPath') . 'category/' . $info->getSaveName();
            //halt($path);
            return json_encode(['valid' => 1, 'msg' => $path]);
        } else {
            return json_encode(['valid' => 0, 'msg' => $file->getError()]);
        }
    }

    /**
     * 编辑当前栏目
     * @param CategoryModel $category
     * @return \think\response\View
     */
    public function edit(CategoryModel $category)
    {
        if (request()->isPost()) {
            $data = input('post.');
            $res  = $category->edit($data);
            if ($res['valid']) {
                return alert($res['msg'], url('index'), 6, 3);
            } else {
                return alert($res['msg'], '', 5, 3);
            }
        }
        $id = input('param.id');
        // 获取所有数据
        $oldData = db('cate')->where('cate_id', $id)->find();
        // 获取栏目数据, 剔除自己及子集数据
        $_cateRes = $category->getCate($id);
        // 获取模型数据
        $models = db('model')->field('model_id,model_name')->select();
        $this->assign('cateRes', $_cateRes);
        $this->assign('oldData', $oldData);
        $this->assign('models', $models);
        return view('edit');
    }

    /**
     * 批量删除
     * @return int
     */
    public function delAll(CategoryModel $category)
    {
        if (request()->isAjax()) {
            $ids      = input('param.ids');
            $arr_id   = explode(',', $ids, -1);
            $arrChild = [];
            // 获取所选栏目的子集数据
            foreach ($arr_id as $k => $v) {
                $arrChild[] = $category->getCateChild($v);
            }
            // 将所得的数据变更成一维数组
            $arrChilds = [];
            foreach ($arrChild as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k1 => $item) {
                        $arrChilds[] = $item;
                    }
                } else {
                    $arrChilds[] = $v;
                }
            }
            // 剔除数组中的重复数据
            $arrChilds = array_unique($arrChilds);
            // 执行删除操作
            $result = db('cate')->delete($arrChilds);
            if ($result) {
                return 1;
            } else {
                return 0;
            }
        }
    }

    /**
     * 删除操作
     * @param CategoryModel $category
     * @return int
     */
    public function delete(CategoryModel $category)
    {
        $id = input('param.id');
        // 根据$id 查找子集数据
        $cateChild = $category->getCateChild($id);
        $result    = db('cate')->delete($cateChild);
        if ($result) {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * 删除上传图片
     * @return int
     */
    public function delImg()
    {
        if (request()->isAjax()) {
            $data = input('post.');
            $path = $data['path'];
            $str  = config('uploadPath') . 'category/';
            $path = substr($path, strlen($str));
            $path = DEL_IMG . $path;
            // 先删除存储的图片
            $res = @unlink($path);
            if ($data['id'] != '') {
                // 删除数据库中的数据路径
                db('cate')->where('cate_id', $data['id'])->delete(['cate_thumb' => '']);
            }
            if ($res) {
                return 1;
            } else {
                return 2;
            }
        }
    }

    /**
     * 列表折叠处理，获取子集id
     * @param CategoryModel $category
     * @return string
     */
    public function ajaxList(CategoryModel $category)
    {
        $id = input('param.id');
        // 根据id获取子集栏目数据
        $res = $category->getSonIds($id);
        return json_encode($res);
    }
}
