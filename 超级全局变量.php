<?php
    /*
     * 超级全局变量
     * $GLOBALS
     * $_SERVER
     * $_REQUEST
     * $_POST
     * $_GET
     * $_FILES
     * $_ENV
     * $_COOKIE
     * $_SESSION
     * */
    
    /*
     * $GLOBALS
     * 一个包含了全部变量的全局组合数组
     * 变量的名字就是数组的键
     * */
    $x = 75;
    $y = 25;
    
    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        //z是一个$GLOBALS数组中的超级全局变量，该变量同样可以在函数外访问
    }
    
    addition();
    echo $z;
    
    echo "<br>";
    
    /*
     * $_SERVER
     *一个包含了诸如头信息(header)、路径(path)、以及脚本位置(script locations)等等信息的数组
     * 这个数组中的项目由 Web 服务器创建，不能保证每个服务器都提供全部项目
     * */
    echo $_SERVER['PHP_SELF'];
    //当前执行脚本的文件名，例：文件在http://www.baidu.com/search/index.php上运行，则该变量返回"/search/index.php"
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    //当前运行脚本所在的服务器的主机名，例：文件在http://www.baidu.com/search/index.php上运行，则该变量返回"www.baidu.com"
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    //当前请求头中 Host: 项的内容(当连接端口为80时不存在)，例：文件在http://www.baidu.com：8080/search/index.php上运行，则该变量返回"www.baidu.com:8080"
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    //引导用户代理到当前页的前一页的地址（如果存在），例：当前文件在http://www.baidu.com：8080/search/index.php上运行，之前在http://www.baidu.com：8080/search/login.php上运行，则该变量返回"http://www.baidu.com：8080/search/login.php"
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    //获取用户客户端信息，例：当前文件在http://www.baidu.com：8080/search/index.php上运行，则该变量会返回当前访问页面的用户客户端信息(用户浏览器类型，操作系统)
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    //包含当前脚本的路径，，例：当前文件在http://www.baidu.com：8080/search/index.php上运行，则该变量会返回"/search/index.php"
    echo "<br>";
    
    /*
     * $_REQUEST
     * 用于收集HTML表单提交的数据
     * 搜索并获取整个页面input字段的name属性与$_REQUEST[]号里的值相同的input字段数据
     * */ ?>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
    $name = $_REQUEST['fname'];
    echo $name;
?>

</body>
</html>
<br>
<?php
    /*
     * $_POST
     * 用于收集表单数据，需在form标签中指定该属性："method="post"
     * 收集整个表单的数据并导入数组，可以通过$_POST["name"]来获取具体值，name为表单中的组件name
     * */ ?>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
    $name = $_POST['fname'];
    echo $name;
?>

</body>
</html>
<br>
<?php
    /*
     * $_GET
     *用于收集表单数据或者URL中传递的数据，需在form标签中指定该属性："method="get"
     * 收集数据并导入数组，可以通过$_GET["name"]来获取具体值，name为数据中的组件name
     * 只有GET方法会将变量显示在URL上
     * */ ?>
<html>
<body>

<a href="超级全局变量.php?subject=PHP&web=runoob.com">Test $GET</a>

</body>
</html>
<br>
<html>
<body>

<?php
    echo "Study " . $_GET['subject'] . " @ " . $_GET['web'];
?>

</body>
</html>
