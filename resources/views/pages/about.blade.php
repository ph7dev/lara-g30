@extends('layouts.old')

@section('title', 'About Us')

@section('navbar')
    @parent
    <p>Content from about page</p>
@endsection

@section('content')
    <h1>{{$title}}</h1>
@endsection
