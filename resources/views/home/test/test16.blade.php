<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="https://cdn.w7.cc/web/resource/js/lib/jquery-1.11.1.min.js"></script>
</head>
<body>
{{--<form action="{{route('test8')}}" method="post">--}}
{{--    @csrf--}}
{{--    <p>姓名：<input type="text" name="name" value=""></p>--}}
{{--    <p>年龄：<input type="text" name="age" value="" ></p>--}}
{{--    <p>邮箱：<input type="email" name="email" value="" ></p>--}}
{{--    <input type="submit" value="提交">--}}
{{--</form>--}}
<input type="button" value="点击我" id="btn">
</body>
<script type="text/javascript">
    $(function () {
        $('#btn').click(function () {
            $.get('/home/test/test17',function (data) {
                console.log(data)

            },'json');
        });
        
    });
</script>
</html>