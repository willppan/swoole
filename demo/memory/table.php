<?php
/**
 * Created by PhpStorm.
 * User: panwei
 * Date: 2019-11-04
 * Time: 16:14
 */
// 实例化内存表
$table = new swoole_table(1024);
// 内存表增加一列
$table->column('id', $table::TYPE_INT, 8);
$table->column('name', $table::TYPE_STRING, 60);
$table->column('age', $table::TYPE_INT, 3);
// 创建表
$table->create();
// 新增数据
$table->set('panwei', ['id' => 1, 'name' => 'panwei', 'age' => 25]);

// 读取数据
print_r($table->get('panwei'));