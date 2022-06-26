@extends('tracing.layout')

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">


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

    <form action="{{ route('tracing.update',$tracing->id) }}" method="POST">

    @csrf

    @method ('PUT')

     <div class="row">
     <h2>Edit Personal Contact Tracing Data</h2>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>First Name:</strong>

                <input type="text" name="first_name" value="{{ $tracing->first_name }}"  class="form-control" placeholder="Insert first name here">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Last Name:</strong>

                <input type="text" name="last_name" value="{{ $tracing->last_name }}" class="form-control" placeholder="Insert last name here">

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Days Monitored:</strong>

                <input type="text" name="days_monitored" value="{{ $tracing->days_monitored }}" class="form-control" placeholder="Insert span of days being monitored">

            </div>

        </div>
            
        <div class="col-xs-12 col-sm-12 col-md-12">
        
            <div class="form-group">

                <strong>Address:</strong>

                <input type="text" name="address" value="{{ $tracing->address }}" class="form-control" placeholder="Insert full address here">

            </div>
        </div>

            <div class="pull-left">

              <button type="submit" class="btn btn-primary"> Update </button>

            </div>

            <div class="pull-left">

                <a class="btn btn-secondary" href="{{ route('tracing.index') }}"> Back</a>

            </div>

        </div>

    </form>

@endsection
