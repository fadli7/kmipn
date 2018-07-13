@extends('frontend.layouts')
@section('title')
{{$artikel->title}}
@endsection
@section('content')
    <div class="default-container">
        <div class="container">
            <br>
            <br>
            <div class="panel panel-default">
                <div class="panel-heading">{{$artikel->title}}</div>
                <div class="panel-body">
                    <p>{{$artikel->content}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection