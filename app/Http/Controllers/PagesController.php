<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
  public function index(){
	$pages = Page::all();
	$page = Page::findOrFail(2);
	//echo $pages->content;
	
	return  view('pages.show',compact('page','pages'));
}
public function show($id){
	$pages = Page::all();
	$page = Page::findOrFail($id);
	//echo $pages->content;
	
	return  view('pages.show',compact('page','pages'));
}
public function create(){
	return  view('pages.create');
}
}
