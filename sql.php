<?php
/* Connect to a MySQL server 连接数据库服务器 */
$mysql_server_name='localhost'; //改成自己的mysql数据库服务器

$mysql_username='root'; //改成自己的mysql数据库用户名

$mysql_password='As123456'; //改成自己的mysql数据库密码

$mysql_database='cy-blog'; //改成自己的mysql数据库名

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

if ($result = mysqli_query($link, 'SELECT Id,msg,name,title FROM invitation_info WHERE Id>0 ')) {
    while( $rs = mysqli_fetch_assoc($result) ){
        // echo "id=",$row['Id'], "|name=", $row['name'], "|title=", $row['title'], "|<br/>";
        echo "<table border='1' cellpadding='0' cellspacing='0'>";
        echo "<tr> <td >标题：".$rs['title']."</td></tr>";
        echo "<tr> <td>作者：".$rs['name']."</td></tr>";
        echo "<tr><td ><p>".$rs['msg']."</p></td></tr>";
        echo "</table>";
    }
    mysqli_free_result($result);
}else{
    echo "SELECT ERROR</br>";
}


?>
</body>
</html>