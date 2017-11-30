<?php

namespace app\admin\model;

use think\Model;

/**
 * 系统配置模型类
 * Class Webset
 * @package app\admin\model
 */
class Webset extends Model
{
    // 定义主键
    protected $pk = 'id';
    // 定义数据表
    protected $table = 'tp_webset';

    /**
     * 添加系统配置数据
     * @param $data
     * @return array
     */
    public function store($data)
    {
        // 验证添加数据
        $result = $this->validate(true)->save($data);
        if ($result === false) {
            return ['valid' => 0, 'msg' => $this->getError()];
        } else {
            return ['valid' => 1, 'msg' => '操作成功'];
        }
    }

    /**
     * 编辑系统配置数据
     * @param $data
     * @return array
     */
    public function edit($data)
    {
        // 验证编辑数据
        $result = $this->validate(true)->save($data, [$this->pk => $data['id']]);
        if ($result !== false) {
            return ['valid' => 1, 'msg' => '操作成功'];
        } else {
            return ['valid' => 0, 'msg' => $this->getError()];
        }
    }

    /**
     * 修改展示的所有配置值
     * @param $data
     * @return array
     */
    public function confAdd($data)
    {
        //dump($data);
        // 验证数据
        // 获取所有的ename
        $eName = $this->column('ename');
        // 获取所有提交过来的ename
        $dataKey = [];
        // 循环添加修改数据
        foreach ($data as $k => $v) {
            $dataKey[] = $k;
            // 如果获取的value值是数组，将其打散成字符串，添加到数据库
            if (is_array($v)) {
                $v = implode(',', $v);
            }
            $this->where('ename', $k)->update(['value' => $v]);
        }
        // 循环所有的$eName，判断提交的数据是否在$eName中
        // 没有将他的值赋值为空
        foreach ($eName as $k => $v) {
            if (!in_array($v, $dataKey)) {
                $this->where('ename', $v)->update(['value' => '']);
            }
        }
        // 附件处理
        $this->fileUpload();
        return ['valid' => 1, 'msg' => '修改成功'];
    }

    public function fileUpload()
    {
        // 查询数据库中的所有附件类型
        $files = db('webset')->where('dt_type', 6)->column('ename');
        foreach ($files as $k => $v) {
            if (!is_null($_FILES[ $v ]['tmp_name'])) {
                // 获取上传文件
                $file = request()->file($v);
                // 移动文件
                $info = $file->validate(['size' => 3000000, 'ext' => 'jpg,png,gif'])
                    ->move(ROOT_PATH . 'public/uploads');
                if (!$info) {
                    return ['valid' => 0, 'msg' => $file->getError()];
                }
                // 获取文件信息，处理文件路径
                $path = $info->getSaveName();
                $this->where('ename', $v)->update(['value' => $path]);
            }
        }
    }
}
