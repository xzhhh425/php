<?php
    /*算术运算符*/
    $x=10;
    $y=6;
    echo ($x + $y); // 输出16
    echo '<br>';  // 换行
    
    echo ($x - $y); // 输出4
    echo '<br>';  // 换行
    
    echo ($x * $y); // 输出60
    echo '<br>';  // 换行
    
    echo ($x / $y); // 输出1.6666666666667
    echo '<br>';  // 换行
    
    echo ($x % $y); // 输出4
    echo '<br>';  // 换行
    
    echo -$x;
    
    /*赋值运算符*/
    $x=10;
    echo $x; // 输出10
    
    $y=20;
    $y += 100;
    echo $y; // 输出120
    
    $z=50;
    $z -= 25;
    echo $z; // 输出25
    
    $i=5;
    $i *= 6;
    echo $i; // 输出30
    
    $j=10;
    $j /= 5;
    echo $j; // 输出2
    
    $k=15;
    $k %= 4;
    echo $k; // 输出3
    
    $a = "Hello";
    $b = $a . " world!";
    echo $b; // 输出Hello world!
    
    $x="Hello";
    $x .= " world!";
    echo $x; // 输出Hello world!
    
    /*
     * 递增/递减运算符
     * ++ x	预递增	x 加 1，然后返回 x
     * x ++	后递增	返回 x，然后 x 加 1
     * -- x	预递减	x 减 1，然后返回 x
     * x --	后递减	返回 x，然后 x 减 1
     * */
    $x=10;
    echo ++$x; // 输出11
    
    $y=10;
    echo $y++; // 输出10
    
    $z=5;
    echo --$z; // 输出4
    
    $i=5;
    echo $i--; // 输出5
    
    /*
     * 比较运算符
     * x == y	等于	如果 x 等于 y，则返回 true
     * x === y	绝对等于	如果 x 等于 y，且它们类型相同，则返回 true
     * x != y	不等于	如果 x 不等于 y，则返回 true
     * x <> y	不等于	如果 x 不等于 y，则返回 true
     * x !== y	不绝对等于	如果 x 不等于 y，或它们类型不相同，则返回 true
     * x > y	大于	如果 x 大于 y，则返回 true
     * x < y	小于	如果 x 小于 y，则返回 true
     * x >= y	大于等于	如果 x 大于或者等于 y，则返回 true
     * x <= y	小于等于	如果 x 小于或者等于 y，则返回 true
     * */
    $x=100;
    $y="100";
    
    var_dump($x == $y);
    echo "<br>";
    var_dump($x === $y);
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";
    var_dump($x !== $y);
    echo "<br>";
    
    $a=50;
    $b=90;
    
    var_dump($a > $b);
    echo "<br>";
    var_dump($a < $b);
    
    /*
     * 数组运算符
     *x + y	集合	x 和 y 的集合
     * x == y	相等	如果 x 和 y 具有相同的键/值对，则返回 true
     * x === y	恒等	如果 x 和 y 具有相同的键/值对，且顺序相同类型相同，则返回 true
     * x != y	不相等	如果 x 不等于 y，则返回 true
     * x <> y	不相等	如果 x 不等于 y，则返回 true
     * x !== y	不恒等	如果 x 不等于 y，则返回 true
     * */
    $x = array("a" => "red", "b" => "green");
    $y = array("c" => "blue", "d" => "yellow");
    $z = $x + $y; // $x 和 $y 数组合并
    var_dump($z);
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x != $y);
    var_dump($x <> $y);
    var_dump($x !== $y);
