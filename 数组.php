<?php
    /*
     * 数组
     * 一个能在单个变量中存储多个值的特殊变量
     *
     * 三种类型的数组：
     * 数值数组 - 带有数字 ID 键的数组
     * 关联数组 - 带有指定的键的数组，每个键关联一个值
     * 多维数组 - 包含一个或多个数组的数组
     * */
    
    /*数值数组*/
    $arrays = array("asd", "qwe", "zxc");
//打印数组文本
    echo $arrays[0] . " " . $arrays[1] . " " . $arrays[2];
    echo "<br>";
//获取数组长度(数组从0开始)
    echo count($arrays);
    echo "<br>";
//遍历数值数组
    for ($x = 0; $x < count($arrays); $x++) {
        echo $arrays[$x];
        echo "<br>";
    }
    
    /*关联数组*/
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    //遍历关联数组
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
