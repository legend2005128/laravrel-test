@extends('layouts.app')
@section('content')
    @foreach ($info as $item)
        <p>
            <a href="{{  url('news/detail/'.$item['id'])}}" title="{{$item['title']}}}">
                {{ $item['title'] }}
            </a>
        </p>
    @endforeach
@endsection
