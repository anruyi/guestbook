<DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        div {
            width: 100%;

        }
        h1 {
            text-align: center;
        }
        div form {
            width: 200px;
            height: 200px;
            margin: 0px auto;
        }
        div form textarea {

        }
        form input {
            /*display: block;*/
            margin-bottom: 20px;
        }
    </style>
    <title>表单提交</title>
</head>
<body>
    <h1>guestbook!</h1>
    <div>
    <form action="receive.php" method="post">
        标题
        <input type="text" name="title" id="title">
        <br>
        姓名
        <input type="text" name="user">
        <br>
        内容
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="OK">
        <input type="reset" value="NO">
    </form>
    </div>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: chenyi
 * Date: 17-7-9
 * Time: 12:24
 */
?>
