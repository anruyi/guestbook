<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-7-9
 * Time: 12:24
 */
$list;  //用本数组暂存数据

$id = $_GET['id'];
/* Connect to a MySQL server 连接数据库服务器 */
$mysql_server_name='localhost'; //改成自己的mysql数据库服务器

$mysql_username='root'; //改成自己的mysql数据库用户名

$mysql_password='As123456'; //改成自己的mysql数据库密码

$mysql_database='guestbook'; //改成自己的mysql数据库名

$link = mysqli_connect(
    $mysql_server_name, /* The host to connect to 连接MySQL地址 */
    $mysql_username,   /* The user to connect as 连接MySQL用户名 */
    $mysql_password, /* The password to use 连接MySQL密码 */
    $mysql_database);  /* The default database to query 连接数据库名称*/
if (!$link) {
    printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
}else{
    echo '数据库连接成功(outside of function)！</br>';
}
echo ".$id.";
if ($result = mysqli_query($link, 'SELECT id,msgTitle,msgUser,msgContent FROM defaultmsg WHERE id='.$id.'')) {
    while( $rs = mysqli_fetch_assoc($result) ){
        $list = $rs;
    }
    echo "hello".$id;
    mysqli_free_result($result);
}else{
    echo "SELECT ERROR</br>";
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>dispaly</title>
    <style>
        table {
            width: 800px;
            /*height: 100%;*/
            margin: auto auto;
            border: blue 2px solid;
        }
        table td {
            border: blue 1px solid;
        }
        table tr {
            border: blue 1px solid;
        }
    </style>
</head>
<body>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>姓名</th>
            <th>详情</th>
            <th>修改</th>
            <th>删除全部</th>
        </tr>
        <?php
                echo "        
                    <tr>
                        <td>".$list['id']."</td>
                        <td>".$list['msgTitle']."</td>
                        <td>".$list['msgUser']."</td>
                        <td><a href='' >".$list['msgContent']."</a></td>
                        <td><a href='' >修改</a></td>
                        <td><a href='' >删除</a></td>
                    </tr>
                ";
        ?>
    </table>
</body>
</html>
