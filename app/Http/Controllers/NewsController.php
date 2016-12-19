<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

use App\article_base as article;


class NewsController extends Controller
{
    public function index(){

        $users = DB::table('article_base')->get();
        $email = DB::table('users')->where('name', 'user2')->value('email');
        DB::table('users')->chunk(2, function($users) {
            dump(
                $users
            );
            return false;
        });
      //  return view('news.index');
    }
    public function list()
    {
        $info = article::all();
        return view('news.index',['info'=>$info]);
    }
    public function detail(){
        ECHO $ID = Request::get('id');

    }
}
