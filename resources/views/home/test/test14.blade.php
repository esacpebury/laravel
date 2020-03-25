<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <p>姓名：<input type="text" name="name" value=""/></p>
    <p>年龄：<input type="text" name="age" value=""/> </p>
    <p>邮箱：<input type="email" name="email" value=""/> </p>
    <p>头像：<input type="file" name="avatar" value="" /></p>
    <input type="submit" value="提交"/>
</form>
</body>
</html>