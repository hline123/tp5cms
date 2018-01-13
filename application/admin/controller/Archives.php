<?php

namespace app\admin\controller;

use app\admin\model\Archives as ArchivesModel;
use think\Image;

/**
 * 文档管理控制器类
 * Class archives
 * @package app\admin\controller
 */
class Archives extends Base
{

    public function index()
    {
        // 接收model_id
        $model_id = input("param.model_id");
        $cate_id = input('param.cate_id');
        if (!$model_id) {
            $model_id = 0;
        }
        //输出列表
        $lists = [];
        $this->assign([
            'lists'    => $lists,
            'model_id' => $model_id,
            'cate_id'  => $cate_id
        ]);
        return view();
    }

    public function store(ArchivesModel $archives)
    {
        // 获取所有栏目数据
        $cates = $archives->getCateData();
        $model_id = input("param.model_id");
        $cate_id = input('param.cate_id');
        // 获取当前模型自定义字段
        $diyFields = db('field')->where('model_id', $model_id)->select();
        $longText = db('field')->where(['model_id' => $model_id, 'field_type' => 9])->select();
        $this->assign([
            'cates'     => $cates,
            'model_id'  => $model_id,
            'cate_id'   => $cate_id,
            'diyFields' => $diyFields,
            'longText'  => $longText
        ]);
        return view();
    }

    public function edit($id)
    {

        return view();
    }


    public function delete($id)
    {
        //
    }

    /**
     * ajax 处理文件上传
     * @return string
     */
    public function upImg()
    {
        // 获取上传文件
        $file = $this->request->file('pic');
        // halt($file);
        // 移动文件
        if (!$file) {
            return json_encode(['valid' => 0, 'msg' => '上传文件不存在']);
        }
        // 移动至uploads/home
        $info = $file->move(ROOT_PATH . 'public/uploads/home');
        // 判断处理文件
        if ($info) {
            // 返回文件信息
            $imgSrc = DEL_IMG_HOME . $info->getSaveName();
            // 生成图片缩略图
            $image = Image::open($imgSrc);
            // 按照原图的比例生成缩略图并替换原有的上传图片
            $water = DEL_IMG_HOME . 'water.png';
            $image->thumb(600, 600)->water($water)->save($imgSrc);
            $path = config('uploadPath') . 'home/' . $info->getSaveName();
            return json_encode(['valid' => 1, 'msg' => $path]);
        } else {
            return json_encode(['valid' => 0, 'msg' => $file->getError()]);
        }
    }

    /**
     * ajax删除上传图片
     */
    public function delImg()
    {
        if (request()->isAjax()) {
            $data = input('post.');
            $path = $data['path'];
            $str = config('uploadPath') . 'home/';
            $path = substr($path, strlen($str));
            $path = DEL_IMG_HOME . $path;
            // 先删除存储的图片
            $res = @unlink($path);
            if ($data['id'] != '') {
                // 删除数据库中的数据路径
                db('archives')->where('id', $data['id'])->setField('pic', '');
            }
            if ($res) {
                return 1;
            } else {
                return 2;
            }
        }
    }
}





























