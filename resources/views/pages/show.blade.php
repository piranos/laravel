@extends('layout')
@section('menu')
	@foreach ($pages as $menuItem)
	<a href="{{$menuItem->id}}">{{$menuItem->title}}</a>
	@endforeach
@stop
@section('content')
	<h1>{{$page->title}}</h1>
	<div class="">{{$page->content}}</div>
	
@stop