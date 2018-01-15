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
    // 文档列表操作
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

    /**
     * 添加文档操作
     * @param ArchivesModel $archives
     * @return \think\response\View
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
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
        // 移动文件
        if (!$file) {
            return json_encode(['valid' => 0, 'msg' => '上传文件不存在']);
        }
        // 移动至uploads/home
        $info = $file->move(ROOT_PATH . 'public/uploads/home');
        // 判断处理文件
        if ($info) {
            // 判断是否允许上传缩略图
            if ($this->confRes['thumb'] == '是') {
                $thumb_width    = $this->confRes['thumb_width'];
                $thumb_height   = $this->confRes['thumb_height'];
                // $thumb_way      = $this->confRes['thumb_way'];
                // $water_position = $this->confRes['water_position'];
                $water_opacity  = $this->confRes['water_opacity'];
                $water          = $this->confRes['water'];
                // 定义上传图片存储路径
                $imgSrc = DEL_IMG_HOME . $info->getSaveName();
                // 生成图片缩略图
                $image = Image::open($imgSrc);
                // 按照原图的比例生成缩略图并替换原有的上传图片
                $water_img = DEL_IMG_ADMIN . $this->confRes['water_img'];
                // 缩略图剪裁方案
                //等比例缩放,缩放后填充,居中裁剪,左上角裁剪,右下角裁剪,固定尺寸缩放
                switch ($this->confRes['thumb_way']) {
                    case '等比例缩放':
                        $thumb_way = 1;
                        break;
                    case '缩放后填充':
                        $thumb_way = 2;
                        break;
                    case '居中裁剪':
                        $thumb_way = 3;
                        break;
                    case '左上角裁剪':
                        $thumb_way = 4;
                        break;
                    case '右下角裁剪':
                        $thumb_way = 5;
                        break;
                    case '固定尺寸缩放':
                        $thumb_way = 6;
                        break;
                }
                // 水印位置
                // 左上角,上居中,右上角,左居中,居中,右居中,左下角,下居中,右下角
                switch ($this->confRes['water_position']) {
                    case '左上角':
                        $water_position = 1;
                        break;
                    case '上居中':
                        $water_position = 2;
                        break;
                    case '右上角':
                        $water_position = 3;
                        break;
                    case '左居中':
                        $water_position = 4;
                        break;
                    case '居中':
                        $water_position = 5;
                        break;
                    case '右居中':
                        $water_position = 6;
                        break;
                    case '左下角':
                        $water_position = 7;
                        break;
                    case '下居中':
                        $water_position = 8;
                        break;
                    case '右下角':
                        $water_position = 9;
                        break;
                }
                // 判断是否添加水印
                if ($water == '是') {
                    $image->thumb($thumb_width, $thumb_height, $thumb_way)->water($water_img,$water_position, $water_opacity)->save($imgSrc);
                }else {
                    $image->thumb($thumb_width, $thumb_height, 1)->save($imgSrc);
                }
            }
            // 返回文件信息
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





























