@extends('layout')
@section('menu')
	@foreach ($pages as $page)
	<div class="">{{$page->title}}</div>
	@endforeach
@stop
@section('content')
	<h1>pages</h1>
	@foreach ($pages as $page)
	<h1>{{$page->title}}</h1>
	<div class="">{{$page->content}}</div>
	@endforeach
@stop