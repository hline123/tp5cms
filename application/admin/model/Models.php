<?php

namespace app\admin\model;

use think\Db;
use think\Loader;
use think\Model;

class Models extends Model
{
    //定义主键
    protected $pk = 'model_id';
    // 定义数据表
    protected $table = 'tp_model';

    /**
     * 添加模型
     * @param $data
     * @return array
     */
    public function store($data)
    {
        // 验证添加数据
        $result = $this->validate('Models.store')->save($data);
        if ($result === false) {
            return ['valid' => 0, 'msg' => $this->getError()];
        } else {
            $table_name = $data['table_name'];
            // 获取完整表名称
            $tableName = config('database.prefix') . $data['table_name'];
            // 创建数据表
            $sql = "CREATE TABLE IF NOT EXISTS {$tableName} (" .
                "{$table_name}_id INT NOT NULL AUTO_INCREMENT, "
                . "PRIMARY KEY ( {$table_name}_id )) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
            // 执行创建
            $table = Db::execute($sql);
            if ($table === false) {
                return ['valid' => 0, 'msg' => '生成数据表失败'];
            }
            return ['valid' => 1, 'msg' => '操作成功'];
        }
    }

    /**
     * 编辑模型操作
     * @param $data
     * @return array
     */
    public function edit($data)
    {
        // 验证数据
        $validate = Loader::validate('Models');
        if (!$validate->scene('edit')->check($data)) {
            return ['valid' => 0, 'msg' => $this->getError()];
        }
        // 修改生成的附加表名称
        // 查询数据库，获取原有数据表名称
        $old_table_name = $this->where('model_id', $data['model_id'])->value('table_name');
        $new_table_name = $data['table_name'];
        // 对比原始附加表和编辑之后的附加表名称，不相等修改数据表名称
        if ($old_table_name != $new_table_name) {
            // 修改数据表名称
            $prefix     = config('database.prefix');
            $table_name = $prefix . $new_table_name;
            $old_name   = $prefix . $old_table_name;
            // 原生sql修改数据表名称
            $sql = "ALTER TABLE {$old_name} RENAME TO {$table_name};";
            // 执行sql操作，修改表名称
            Db::execute($sql);
        }
        // 执行修改操作
        $result = $this->save($data, ['model_id', $data['model_id']]);
        if ($result) {
            return ['valid' => 1, 'msg' => '操作成功'];
        } else {
            return ['valid' => 0, 'msg' => '操作失败'];
        }
    }
}
