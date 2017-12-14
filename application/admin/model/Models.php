<?php

namespace app\admin\model;

use think\Db;
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
    public function store ($data)
    {
        // 验证添加数据
        $result = $this->validate('Models.store')->save($data);
        if ($result === false) {
            return ['valid'=>0, 'msg'=> $this->getError()];
        }else {
            $table_name = $data['table_name'];
            // 获取完整表名称
            $tableName = config('database.prefix') . $data['table_name'];
            // 创建数据表
            $sql = "CREATE TABLE IF NOT EXISTS {$tableName} (".
                "{$table_name}_id INT NOT NULL AUTO_INCREMENT, "
                ."PRIMARY KEY ( {$table_name}_id )) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
            // 执行创建
            $table = Db::execute($sql);
            if ($table === false) {
                return ['valid'=>0, 'msg'=> '生成数据表失败'];
            }
            return ['valid'=>1, 'msg'=> '操作成功'];
        }
    }
}
