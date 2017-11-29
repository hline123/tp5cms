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
    public function edit ($data)
    {
        // 验证编辑数据
        $result = $this->validate(true)->save($data, [$this->pk=>$data['id']]);
        if ($result !== false) {
            return ['valid' => 1, 'msg' => '操作成功'];
        } else {
            return ['valid' => 0, 'msg' => $this->getError()];
        }
    }
    public function confSet ($data)
    {

    }
}
