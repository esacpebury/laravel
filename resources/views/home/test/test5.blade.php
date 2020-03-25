<link rel="stylesheet" type="text/css" href="/css/app.css" >
<link rel="stylesheet" type="text/css" href="{{asset('css')}}/app.css">
@extends('home.test.parent')
@section('mybody')
<div>
    这是可变部分。
</div>
    @endsection



@include('home.test.parent')