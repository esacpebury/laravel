<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <style>
        table td,th {
            border: 1px solid #e5e5e5;
            padding: 8px;
        }
        .table{
            width: 100%;
            margin-left: 20%;
        }
    </style>

</head>
<body>
{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <p>姓名：<input type="text" name="name" value=""></p>--}}
{{--    <p>年龄：<input type="text" name="age" value="" ></p>--}}
{{--    <p>邮箱：<input type="email" name="email" value="" ></p>--}}
{{--    <input type="submit" value="提交">--}}
{{--</form>--}}
<TABLE style="border: 1px solid #000">
    <thead>
    <tr>
        <th>id</th>
        <th>名字</th>
        <th>年龄</th>
        <th>邮箱</th>
        <th>头像</th>
    </tr>

    </thead>
    <tbody>

   @foreach($data as $val)
       <tr >
        <td>{{$val->id}}</td>
        <td>{{$val->name}}</td>
        <td>{{$val->age}}</td>
        <td>{{$val->email}}</td>
        <td><img src=" {{ltrim($val->avatar,'.')}}" width="80px" alt="头像"> </td>
       </tr>
       @endforeach

    </tbody>

</TABLE>
{{$data->links()}}
</body>
</html>