@extends('layouts.secure')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard</div>
                    @if(Auth::check())
                      
                      logged in
                    @endif
            </div>
            @if(Auth::guest())
              <a href="/login" class="btn btn-info"> You need to login to see the list>></a>
            @endif
        </div>
    </div>
</div>
@endsection