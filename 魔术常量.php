<?php
    /*
     * 魔术常量
     * 魔术常量的值随着它们在代码中搞的位置改变而改变
     * 8个魔术常量：
     * 1、__LINE__：返回文件中的当前行号
     * 2、__FILE__：返回文件的完整路径和文件名，如果用在被包含文件中，则返回被包含的文件名
     * 3、__DIR__：返回文件所在的目录，如果用在被包括文件中，则返回被包括的文件所在的目录
     * 4、__FUNCTION__：返回该函数被定义时的名字（区分大小写）
     * 5、__CLASS__：返回该类被定义时的名字（区分大小写）
     * 6、__TRAIT__：返回代码复用方法Trait 的名字
     * 7、__METHOD__：返回类的方法名（区分大小写）
     * 8、__NAMESPACE__：返回当前命名空间的名称（区分大小写），需要把空间声明语句放置在文件第一句
     * */
    
    /*__LINE__*/
    echo '这是第 " ' . __LINE__ . ' " 行' . "<br>";
    /*__FILE__*/
    echo '该文件位于 " ' . __FILE__ . ' " ' . "<br>";
    /*__DIR__*/
    echo '该文件位于 " ' . __DIR__ . ' " ' . "<br>";
    /*__FUNCTION__*/
    function test()
    {
        echo '函数名为：' . __FUNCTION__;
    }
    
    test();
    
    /*__CLASS__*/
    
    trait SayWorld
    {
        public function sayHello()
        {
            parent::sayHello();
            echo 'World!';
        }
    }
    
    $t = new test();
    $t->_print();
    
    
    /*__TRAIT__*/
    
    class test
    {
        function _print()
        {
            echo '类名为：' . __CLASS__ . "<br>";
            echo '函数名为：' . __FUNCTION__;
        }
    }
    
    class Base
    {
        public function sayHello()
        {
            echo 'Hello ';
        }
    }
    
    class MyHelloWorld extends Base
    {
        use SayWorld;
    }
    
    $o = new MyHelloWorld();
    $o->sayHello();
    
    
    /*__METHOD__*/
    function test1()
    {
        echo '函数名为：' . __METHOD__;
    }
    
    test1();
    
    /*__NAMESPACE__*/
    
    /*namespace MyProject;
    
    echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"*/
