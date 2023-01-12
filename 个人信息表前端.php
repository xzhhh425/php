<html>
<head>
    <title></title>
</head>
<body>
<form action="个人信息表后端.php" method="post">
    <table align="center" width="600" border="1">
        <caption><h2>个人信息</h2></caption>

        <tr>
            <td>姓名</td>
            <td><input type="text" name="name"/></td>
        </tr>

        <tr>
            <td>邮箱</td>
            <td><input type="text" name="email"/></td>
        </tr>

        <tr>
            <td>手机号码</td>
            <td><input type="text" name="tel"/></td>
        </tr>

        <tr>
            <td>性别</td>
            <td>
                <input type="radio" name="sex" value="m"/>男
                <input type="radio" name="sex" value="w"/>女
            </td>
        </tr>

        <tr>
            <td>爱好</td>
            <td>
                <input type="checkbox" name="inter[]" value="swim"/>游泳
                <input type="checkbox" name="inter[]" value="read"/>读书
                <input type="checkbox" name="inter[]" value="run"/>跑步
            </td>
        </tr>

        <tr>
            <td>住址</td>
            <td>
                <select name="area">
                    <option selected>--请选择--</option>
                    <option value="bj">北京</option>
                    <option value="gz">广州</option>
                    <option value="sh">上海</option>
                    <option value="cq">重庆</option>
                    <option value="tj">天津</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>自我介绍</td>
            <td>
                <textarea cols="30" name="textarea"></textarea>
            </td>
        </tr>


        <tr>
            <td align="right" colspan="2"><input name="sub" type="submit" value="提交"/></td>
        </tr>


    </table>
</form>

</body>
</html>
