<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="{{route('test8')}}" method="post">
    @csrf
    <p>姓名：<input type="text" name="name" value=""></p>
    <p>年龄：<input type="text" name="age" value="" ></p>
    <p>邮箱：<input type="email" name="email" value="" ></p>
    <input type="submit" value="提交">
</form>
</body>
</html>