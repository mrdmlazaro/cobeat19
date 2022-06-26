@extends('tracing.layout')

@section('content')

 <div class="row">

 <div class="col-lg-12 margin-tb">

 </div>

 </div>

 <div class="row">

 <div class="col-xs-12 col-sm-12 col-md-12">

 <div class="form-group">
 <h2>Contact Tracing Data</h2>
 <strong>First Name:</strong>

 {{ $tracing->first_name }}

 </div>

 </div>

 <div class="col-xs-12 col-sm-12 col-md-12">

 <div class="form-group">

 <strong>Last Name:</strong>

 {{ $tracing->last_name }}

 </div>

 </div>
 <div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Days Monitored:</strong>

{{ $tracing->days_monitored }}

</div>

</div>

<div class="col-xs-12 col-sm-12 col-md-12">

<div class="form-group">

<strong>Address:</strong>

{{ $tracing->address}}

</div>

<div class="pull-left">

<a class="btn btn-primary" href="{{ route('tracing.index') }}"> Back</a>

</div>

</div>

 </div>

@endsection
