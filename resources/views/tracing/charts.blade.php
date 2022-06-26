@extends('tracing.layout')

@section('content')

<!DOCTYPE html>

<html>

<head>

    <title>COVID-19 Contact Tracing by GCT</title>

    
</head>

<body>
<div class="col-sm-6">
              <h1 class="m-0 text-dark">Charts</h1>
           </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Result in Charts</li>
            </ol>
          </div><!-- /.col -->
<div class="container">
 

  <br>
        <br>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

    <table class="table table-bordered">

        <tr align="center">

            <th><a href="{{ asset('bar-chart') }}">Bar Chart</a></th>

            <th><a href="{{ asset('line-chart') }}">Line Chart</a></th>

            <th><a href="{{ asset('pie-chart') }}">Pie Chart</a></th>


        </tr>

  
    </table>
</div>

</body>

</html>
@endsection