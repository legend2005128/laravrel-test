@extends('ini.admin')
@section('title', '我的管理后台首页')
@section('content')
    {!!Form::open(array('id'=>'form1','url'=>'admin/index','class'=>"form-horizontal" ,'role'=>'form'))!!}
        <div class="form-group">
            <h3>登录页面：</h3>
        </div>
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <?php echo Form::text('uname','',['placeholder' => 'Email',"id"=> "inputEmail3", "class"=>"form-control"] );?>
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Sign in</button>
            </div>
        </div>
    {!!Form::close()!!}
@endsection