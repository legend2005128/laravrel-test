@extends('layouts.app')
@section('content')
    <div class="container">
            <dl>
                <dt>{{$detail[0]['title']}}</dt>
                <dd>{!!$detail[0]['content']!!}</dd>
            </dl>
        <p>
            上一篇:
            <a href="{{  url('news/detail/'.@$other['pre'][0]['id'])}}" title="{{@$other['pre'][0]['title']}}}">{{@$other['pre'][0]['title']}}</a>
            下一篇:
            <a href="{{  url('news/detail/'.@$other['next'][0]['id'])}}" title="{{@$other['next'][0]['title']}}}">{{@$other['next'][0]['title']}}</a>
        </p>
    </div>
@endsection