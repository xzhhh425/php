<html>
<head>
    <title></title>
</head>
<body>
<form action="个人所得税计算后端.php" method="post">
    <table border="1" align="center" width="auto">
        <caption><h2>计算个人所得税</h2></caption>
        <tr>
            <td>
                请输入月工资
            </td>
            <td>
                <input type="text" name="tax_calc">
            </td>
        </tr>
        <tr>
            <td>
                请输入扣税减免额
            </td>
            <td>
                <input type="text" name="tac">
            </td>
        </tr>
        <td colspan="2">
            <input type="submit" value="计算所得税" name="sub">
        </td>
    </table>
</form>
</body>
</html>

