@extends('tracing.layout')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>CoBEAT-19 | Contact Tracing </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style type="text/css">
    h2{
        text-align: center;
        font-size:22px;
        margin-bottom:50px;
     }
    body{
        background:#f2f2f2;
    }
    .section{
        margin-top:30px;
        padding:50px;
        background:#fff;
    }
    .pdf-btn{
        margin-top:30px;
    }
</style>    
<body>
<div class="col-sm-6">
            <h1 class="m-0 text-dark">Generate PDF</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ asset('home') }}">Home</a></li>
              <li class="breadcrumb-item active">Proof of Eligibility</li>
            </ol>
          </div><!-- /.col -->
    <div class="container">
        <div class="col-md-8 section offset-md-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h2>Proof of Eligibility to Conduct a COVID-19 Contact Tracing Program</h2>
                </div>
                <div class="panel-body">
                    <div class="main-div">
                            The group labeled as CoBEAT-19, is certified as the official group in which handles the contact tracing program
                    in Manila. This letter serves as proof in order for us to have the permission to get your personal information which consists
                    of your first name, last name, and address.
                    <br>
                    <br>
                            CoBEAT-19 ensures you that the data they have stored will not be used for spying of any sort. Rest assured, there will be no 
                    data leakage of your said name and address. If that were to happen, you can personally sue CoBEAT-19 for their lack of sense of responsibility.
                    <br>
                    <br>
                            The COVID-19 Tracing Program by CoBEAT-19 is currently being discretely managed by a group of people.
                    </div>
                </div>
                <div class="text-center pdf-btn">
                  <a href="{{ route('pdf.generate') }}" class="btn btn-primary">Generate PDF</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection