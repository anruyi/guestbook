<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-7-9
 * Time: 12:23
 */
//POST方法获取index.php页面中title user 和 content 的valule
$title = $_POST['title'];
$user = $_POST['user'];
$content = $_POST['content'];
$time = date("Y-m-d");
echo "display:<br>$title<br>$user<br>$content";

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
$sql = "INSERT INTO defaultmsg (msgTitle, msgContent, msgUser) VALUES ('$title', '$content', '$user')";
if ($result = mysqli_query($link,$sql)){
    if(!$result){
        echo "could not insert data".mysqli_error();
    }
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn)."<br>";
}

?>
<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>receive</title>
</head>
<body>
    <h1>receive ing...</h1>
    <br>
    <?php
    if(1){
        echo "modify OK!<br>";
        echo "<a href='displayAll.php'>查看记录<a>";
    }else  {
        echo "NO";
    }
    ?>
</body>
</html>
