@extends('layout')
@section('menu')
	<a href="/secure/newpage">new</a>
@stop
@section('content')
	<h1>{{$page->title}}</h1>
	<div class="">{{$page->content}}</div>
	
@stop