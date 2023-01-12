<?php
    /*
     * 字符串
     * 单引号和双引号都可以
     * 使用单引号或者双引号即为字符串
     * */
    $x = "Hello world!";
    echo $x;
    echo "<br>";
    $x = 'Hello world!';
    echo $x;
    /*
     * 整型
     *不能有小数点
     * 可以为整数或负数
     * */
    $x = 5985;
    var_dump($x);
    echo "<br>";
    $x = -345; // 负数
    var_dump($x);
    echo "<br>";
    $x = 0x8C; // 十六进制数
    var_dump($x);
    echo "<br>";
    $x = 047; // 八进制数
    var_dump($x);
    /*
     * 浮点数
     * 带小数部分的数字，或是指数形式
     * */
    $x = 10.365;
    var_dump($x);
    echo "<br>";
    $x = 2.4e3;
    var_dump($x);
    echo "<br>";
    $x = 8E-5;
    var_dump($x);
    /*
     * 布尔型
     * 通常用于条件判断
     * */
    $x=true;
    $y=false;
   /*
    * 数组
    * 可以在一个变量中存储多个值
    * 可同时存储多种类型数据
    * */
    $cars=array("text",true,123,123.1231);
    var_dump($cars);
    
    $x="Hello world!";
    $x=null;
    var_dump($x);
