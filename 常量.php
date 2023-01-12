<?php
/*
 * 常量的语法
 *define ( string $name , mixed $value [, bool $case_insensitive = false ] )
 * name：必选参数，常量名称，即标志符。
 * value：必选参数，常量的值。
 * case_insensitive ：可选参数，如果设置为 TRUE，该常量则大小写不敏感。默认是大小写敏感的。
 * 常量在定义后，默认是全局变量，且不能被更改
 * */
// 区分大小写的常量名
    define("GREETING", "欢迎访问 Runoob.com");
    echo GREETING;    // 输出 "欢迎访问 Runoob.com"
    echo '<br>';
    myTest();
    function myTest()
    {
        echo GREETING;
    }
