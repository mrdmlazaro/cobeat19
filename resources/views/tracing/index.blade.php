@extends('tracing.layout')

@section('content')

<!DOCTYPE html>

<html>

<head>

    <title>CoBEAT-19 | Contact Tracing </title>

    
</head>

<body>
<div class="col-sm-6">
              <h1 class="m-0 text-dark">Insert Information</h1>
           </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Insert Data</li>
            </ol>
          </div><!-- /.col -->
<div class="container">
    <div class="row">


  
        
            <div class="col-lg-12 margin-tb">

                <div class="pull-left">

                <h2>COVID-19 Contact Tracing by CoBEAT-19</h2>

            </div>
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tracing.create') }}"> ADD NEW CONTACT TRACING INFORMATION</a>
            </div>

        </div>

    </div>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>First Name</th>

            <th>Last Name</th>

            <th>Days being monitored</th>

            <th>Address</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($tracings as $tracing)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $tracing->first_name }}</td>

            <td>{{ $tracing->last_name }}</td>

            <td>{{ $tracing->days_monitored}}</td>

            <td>{{ $tracing->address}}</td>

            <td>

                <form action="{{ route('tracing.destroy',$tracing->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('tracing.show',$tracing->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('tracing.edit',$tracing->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach
  
    </table>
</div>
{!! $tracings->links() !!}
</body>

</html>
@endsection