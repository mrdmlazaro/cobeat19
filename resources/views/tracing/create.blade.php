@extends('tracing.layout')

@section('content')



<div class="container">
<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Save information</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('tracing.index') }}"> Back</a>

        </div>

    </div>

</div>

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Please read the guidelines properly!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<form action="{{ route('tracing.store') }}" method="POST">

    @csrf

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>First Name:</strong>

                <input type="text" name="first_name" class="form-control" placeholder="Insert first name here">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Last Name:</strong>

                <input type="text" name="last_name" class="form-control" placeholder="Insert last name here">

            </div>

        </div>

 
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Days Monitored:</strong>

                <input type="text" name="days_monitored" class="form-control" placeholder="Insert the span of days of which he/she is being monitored">

            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Address:</strong>

                <input type="text" name="address" class="form-control" placeholder="Insert full address here">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                <button type="submit" class="btn btn-primary">ADD TO THE LIST</button>

        </div>

    </div>

</form>


@endsection