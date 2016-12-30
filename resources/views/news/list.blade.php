@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="list-unstyled text-left">
            @foreach ($info as $item)
            <li>
                <a href="{{  url('news/detail/'.$item['id'])}}" title="{{$item['title']}}}">
                    {{ $item['title'] }}
                </a>
                <?php
                     echo date("Y-m-d H:i:s",$item['create_time']/1000) ;
                ?>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
