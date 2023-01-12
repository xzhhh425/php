<?php
    /*
     * 循环
     * while - 只要指定的条件成立，则循环执行代码块
     * do...while - 首先执行一次代码块，然后在指定的条件成立时重复这个循环
     * for - 循环执行代码块指定的次数
     * foreach - 根据数组中每个元素来循环代码块
     * */
    
    /*
     * while循环
     * while 循环将重复执行代码块，直到指定的条件不成立
     *
     * 语法：
     * while (条件)
     * {
     *      要执行的代码;
     * }
     * */
    $i = 1;
    while ($i <= 5) {
        echo "The number is " . $i . "<br>";
        $i++;
    }
    
    echo "<br>";
    
    /*
     * do...while 语句
     * do...while 语句会至少执行一次代码，然后检查条件，只要条件成立，就会重复进行循环
     *
     * 语法:
     * do
     * {
     *      要执行的代码;
     * }
     * while (条件);
     * */
    $i = 1;
    do {
        $i++;
        echo "The number is " . $i . "<br>";
    } while ($i <= 5);
    
    echo "<br>";
    
    /*
     * for 循环
     * for 循环用于您预先知道脚本需要运行的次数的情况
     *
     * 语法：
     * for (初始值; 条件; 增量)
     * {
     *      要执行的代码;
     * }
     *
     * 参数：
     * 初始值：主要是初始化一个变量值，用于设置一个计数器（但可以是任何在循环的开始被执行一次的代码）。
     * 条件：循环执行的限制条件。如果为 TRUE，则循环继续。如果为 FALSE，则循环结束。
     * 增量：主要用于递增计数器（但可以是任何在循环的结束被执行的代码）。
     *
     * 初始值和增量参数可为空，或者有多个表达式（用逗号分隔）
     * */
    for ($i = 1; $i <= 5; $i++) {
        echo "数字为 " . $i ."<br>";
    }
    
    echo "<br>";
    
    /*for循环冒泡排序*/
    $arr = array(5, 3, 6, 2, 8, 10);
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        for ($j = 0; $j < $i; $j++) {
            if ($arr[$j + 1] > $arr[$j]) {
                $aa = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $aa;
            }
        }
    }
    print_r($arr);
    
    echo "<br>";
    
    /*
     * foreach 循环
     * 用于遍历数组
     *
     * 第一种用法：
     * 语法：
     * foreach ($array as $value)
     * {
     *      要执行代码;
     * }
     * 解析：
     * 每进行一次循环，当前数组$array元素的值就会被赋值给 $value 变量（数组指针会逐一地移动），在进行下一次循环时，将看到数组中的下一个值
     *
     * 第二种用法：
     * 语法：
     * foreach ($array as $key => $value)
     * {
     *      要执行代码;
     * }
     * 解析：
     * 每一次循环，当前数组$array元素的键与值就都会被赋值给 $key 和 $value 变量（数字指针会逐一地移动），在进行下一次循环时，将看到数组中的下一个键与值。
     * */
    echo "第一种用法" . "<br>";
    $x = array("Google", "Runoob", "Taobao");
    foreach ($x as $value) {
        echo $value . PHP_EOL;
    }
    
    echo "<br>";
    echo "第二种用法" . "<br>";
    $x = array(1 => "Google", 2 => "Runoob", 3 => "Taobao");
    foreach ($x as $key => $value) {
        echo "key  为 " . $key . "，对应的 value 为 " . $value . "<br>";
    }
