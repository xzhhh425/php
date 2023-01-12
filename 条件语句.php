<?php
    /*
     * 条件语句
     * if 语句 - 在条件成立时执行代码
     * if...else 语句 - 在条件成立时执行一块代码，条件不成立时执行另一块代码
     * if...elseif....else 语句 - 在若干条件之一成立时执行一个代码块
     * switch 语句 - 在若干条件之一成立时执行一个代码块
     * */

    /*
     * if语句
     * */
    $t=date("H");
    if ($t<"20")
    {
        echo "Have a good day!";
    }
    
    /*
     * if...else语句
     * */
    $t=date("H");
    if ($t<"20")
    {
        echo "Have a good day!";
    }
    else
    {
        echo "Have a good night!";
    }
    
    /*
     * if...elseif....else语句
     * elseif 和 else if 完全同效果
     * */
    $t=date("H");
    if ($t<"10")
    {
        echo "Have a good morning!";
    }
    elseif ($t<"20")
    {
        echo "Have a good day!";
    }
    else
    {
        echo "Have a good night!";
    }
    
    /*
     * Switch 语句
     *用于根据多个不同条件执行不同动作
     * 需要使用break来中断程序运行
     * */
    $favcolor="red";
    switch ($favcolor)
    {
        case "red":
            echo "你喜欢的颜色是红色!";
            break;
        case "blue":
            echo "你喜欢的颜色是蓝色!";
            break;
        case "green":
            echo "你喜欢的颜色是绿色!";
            break;
        default:
            echo "你喜欢的颜色不是 红, 蓝, 或绿色!";
    }
