@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ url('user/add') }}">新增用户</a> |  <a href="{{ url('user/list') }}">列表</a>
        <table id="table"></table>
    </div>
<script>
    $('#table').bootstrapTable({
        url: '{{url('/user/ajaxlist')}}',
        columns: [{
            field: 'id',
            title: 'ID'
        }, {
            field: 'name',
            title: 'Name'
        }, {
            field: 'email',
            title: 'Email'
        }]
    });
</script>
@endsection



