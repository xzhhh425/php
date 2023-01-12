<?php
    $x = 5; // 全局变量
    $y = 10;
    /*
    1、定义在函数外部的就是全局变量，它的作用域从定义处一直到文件结尾。
    2、函数内定义的变量就是局部变量，它的作用域为函数定义范围内。
    3、函数之间存在作用域互不影响。
    4、局部变量会覆盖全局变量。
    5、所有的全局变量存储在一个名为 $GLOBALS[index] 的数组里，index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量
    */
    
    function globalts()
    {
        //$y=11; // 局部变量
        global $x, $y;//global 关键字用于函数内访问全局变量。
        echo "<p>测试函数内变量:<p>";
        echo "变量 x 为: $x";
        echo "<br>";
        echo "变量 y 为: $y";
    }
    
    function staticts()
    {
        static $z = 0;//static关键字用于保留局部变量
        echo $z;
        $z++;
        echo PHP_EOL;    // 换行符
    }
    
    globalts();
    
    echo "<p>测试函数外变量:<p>";
    echo "变量 x 为: $x";
    echo "<br>";
    echo "变量 y 为: $y";
    echo "<p>测试保留局部变量:<p>";
    staticts();
    staticts();
    staticts();
    staticts();
