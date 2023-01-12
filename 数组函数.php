<?php
    /*
     * 数组函数
     *      数组排序函数
     *          sort() - 对数组进行升序排列
     *          rsort() - 对数组进行降序排列
     *          asort() - 根据关联数组的值，对数组进行升序排列
     *          ksort() - 根据关联数组的键，对数组进行升序排列
     *          arsort() - 根据关联数组的值，对数组进行降序排列
     *          krsort() - 根据关联数组的键，对数组进行降序排列
     * */
    
    
    $sort1 = array("qwer", "asdfg", "zxcv");
    $rsort1 = array(85, 4541, 8526);
    $asort1 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    $ksort1 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    $arsort1 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    $krsort1 = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    /*
     * sort()
     *将数组中的元素按照首字母或数字顺序升序排列
     * */
    sort($sort1);
    print_r($sort1);
    echo "<br>";
    
    /*
     * rsort()
     * 将数组中的元素按照首字母或数字顺序降序排列
     * */
    rsort($rsort1);
    print_r($rsort1);
    echo "<br>";
    
    /*
     * asort()
     * 根据数组的值，对数组进行升序排列
     * */
    asort($asort1);
    print_r($asort1);
    echo "<br>";
    
    /*
     * ksort()
     * 根据数组的键，对数组进行升序排列
     * */
    
    ksort($ksort1);
    print_r($ksort1);
    echo "<br>";
    
    /*
     * arsort()
     * 根据数组的值，对数组进行降序排列
     * */
    arsort($arsort1);
    print_r($arsort1);
    echo "<br>";
    
    /*
     * krsort()
     * 根据数组的键，对数组进行降序排列
     * */
    krsort($krsort1);
    print_r($krsort1);
    echo "<br>";
