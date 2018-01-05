<?php

namespace app\admin\model;

use think\Db;
use think\Loader;
use think\Model;

/**
 * 字段管理模型类
 * Class Fields
 * @package app\admin\model
 */
class Fields extends Model
{
    // 定义主键
    protected $pk = 'field_id';
    // 定义数据表
    protected $table = 'tp_field';

    /**
     * 添加字段数据
     * @param $data
     * @return array
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function store($data)
    {
        // 验证数据
        $validate = Loader::validate('Fields');
        if (!$validate->scene('store')->check($data)) {
            return ['valid' => 0, 'msg' => $validate->getError()];
        }
        // 获取数据表名称
        $tableName = db('model')->field('table_name')->find($data['model_id']);
        $tableName = config('database.prefix') . $tableName['table_name'];
        // 将字段可选值的中文逗号，转化为英文逗号
        if (!is_null($data['field_values'])) {
            $data['field_values'] = str_replace('，', ',', $data['field_values']);
        }

        // 添加字段
        $insert = $this->save($data);
        if ($insert) {
            // 判断字段类型，根据字段类型，选择填入
            switch ($data['field_type']) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 6:
                    $fieldType = 'varchar(150) not null default ""';
                    break;
                case 5:
                    $fieldType = 'varchar(600) not null default ""';
                    break;
                case 7:
                    $fieldType = 'float not null default "0.0"';
                    break;
                case 8:
                    $fieldType = 'int not null default "0"';
                    break;
                case 9:
                    $fieldType = 'longtext';
                    break;
                default:
                    $fieldType = 'varchar(150) not null default ""';
                    break;
            }
            // 添加数据表字段
            $sql="alter table {$tableName} add {$data['field_ename']} {$fieldType}";
            // 执行SQL操作
            Db::execute($sql);
            return ['valid'=>1, 'msg'=> '添加字段成功'];
        }else {
            return ['valid'=>0, 'msg'=> '操作失败'];
        }
    }
    /*
     * 模块字段编辑操作
     */
    public function edit ($data)
    {
//         halt($data);
        $validate = Loader::validate('Fields');
        if (!$validate->scene('edit')->check($data)) {
            return ['valid' => 0, 'msg' => $validate->getError()];
        }
        // 获取数据表前缀
        $prefix = config('database.prefix');
        // 查询相应的字段数据信息
        $finds = db('field')->field('f.field_ename,m.table_name')->alias('f')->join('tp_model m', 'f.model_id=m.model_id')->find($data['id']);
        $tableName = $prefix . $finds['table_name'];
        $oldFieldName = $finds['field_ename'];
        // 将字段可选值的中文逗号，转化为英文逗号
        if (!is_null($data['field_values'])) {
            $data['field_values'] = str_replace('，', ',', $data['field_values']);
        }
        $result = $this->save($data, ['id'=> $data['id']]);
        if ($result === false) {
            return ['valid'=>0, 'msg'=> '操作失败'];
        }else {
            // 判断字段类型，根据字段类型，选择填入
            switch ($data['field_type']) {
                case 1:
                case 2:
                case 3:
                case 4:
                case 6:
                    $fieldType = 'varchar(150) not null default ""';
                    break;
                case 5:
                    $fieldType = 'varchar(600) not null default ""';
                    break;
                case 7:
                    $fieldType = 'float not null default "0.0"';
                    break;
                case 8:
                    $fieldType = 'int not null default "0"';
                    break;
                case 9:
                    $fieldType = 'longtext';
                    break;
                default:
                    $fieldType = 'varchar(150) not null default ""';
                    break;
            }
            // 修改数据表字段
            $sql="alter table {$tableName} CHANGE {$oldFieldName} {$data['field_ename']} {$fieldType}";
            // 执行SQL操作
            Db::execute($sql);
            return ['valid'=>1, 'msg'=> '操作成功'];
        }
    }
}
