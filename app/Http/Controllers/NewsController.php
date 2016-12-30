<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;


use App\article_base as article;
use Illuminate\Support\Facades\Input;


class NewsController extends Controller
{
    //列表页
    public function list()
    {
        $info = article::all();
        return view('news.list',['info'=>$info]);
    }
    //详情页
    public function detail( int $id )
    {
        //获取详情
        $detail = article::where('id', $id)->get();
        //上一条 下一条
        $next = article::select(['title', 'id'])->where('id', '>', $id)->orderBy("id", "asc")->limit(1)->get();
        $pre =  article::select(['title', 'id'])->where('id', '<', $id)->orderBy("id", "desc")->limit(1)->get();
        $other['pre']  = $pre?$pre:array();
        $other['next']  = $next?$next:array();
        return view('news.detail',['detail'=>$detail,'other'=>$other]);
    }


}
