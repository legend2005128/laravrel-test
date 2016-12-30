<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class UserController extends Controller
{
    //列表页
    public function list()
    {
        return view('users.list');
    }
    //新增页面
    public function add()
    {
        return view('users.add');
    }
}
