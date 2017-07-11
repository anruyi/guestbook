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
if (mysqli_query($link, 'DELETE FROM defaultmsg WHERE id='.$id.'')) {
    echo "OK";
}else{
    echo "Delete ERROR!</br>";
}
?>
<html>
<head>
    <meta charset="utf-8">
    <title>dispaly</title>
    <style>

    </style>
</head>
<body>
<table cellpadding="0" cellspacing="0">
    <?php
    echo " 删除成功!<br><a href='displayAll.php'>回到界面</a> ";
    ?>
</table>
</body>
</html>
