@extends('layouts.app')
@section('content')
<a href="{{ url('user/add') }}">新增用户</a> |  <a href="{{ url('user/list') }}">列表</a>
@endsection
