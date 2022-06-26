@extends('tracing.layout')

@section('content')
<div class="col-sm-6">
              <h1 class="m-0 text-dark">Homepage</h1>
           </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
<img  src="{{ asset('dist/img/home.png') }}" width="100%" height="100%">

@endsection