<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //列表页
    public function list(  )
    {
        return view('user.list');
    }

    //列表页请求
    public function ajaxlist( Request $request )
    {
        $filter_arr = $request->all();
        $qu = DB::table('users')->select('id','name','email','phone');
        if( $filter_arr['search'] != '搜索' )
        {
            $qu->where('name', 'like', '%'.$filter_arr['search'].'%')->where('email', 'like', '%'.$filter_arr['search'].'%');
        }
        $info =  $qu->orderBy('id','asc')
                    ->limit($filter_arr['limit'])
                    ->offset($filter_arr['offset'])
                    ->get();
        return Response()->json($info);
    }

    //新增页面
    public function add( Request $request )
    {
       if( $request->isMethod('post') ){
           $request_s = $request->all();
           $this->validate($request, [
               'name' => 'required|max:255',
               'email' => 'required|email|max:255|unique:users',
               'phone' => 'regex:/^1[34578](\d){9}$/|unique:users,phone',
               'password' => 'required|min:6',
           ]);
           if($request_s){
               User::create([
                   'name'  =>  $request_s['name'],
                   'email' =>  $request_s['email'],
                   'phone' =>  $request_s['phone'],
                   'password'=>bcrypt($request_s['password'])
               ]);
           }
        }
        return view('user.add');
    }
}
