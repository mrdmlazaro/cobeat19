
@extends('tracing.layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Contact Tracing: Bar Chart</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha512-vBmx0N/uQOXznm/Nbkp7h0P1RfLSj0HQrFSzV8m7rOGyj30fYAOKHYvCNez+yM8IrfnW0TCodDEjRqf6fodf/Q==" crossorigin="anonymous"></script>

</head>
<body>
    <div style="height:400px;width:900px;margin:auto;">
        <canvas id="barChart"></canvas>
    </div>

    <script>
        $(function(){
            var datas = <?php echo json_encode($datas); ?>;
            var barCanvas = $("#barChart");
            var barChart = new Chart(barCanvas, {
                type:'bar',
                data:{
                    labels:['Jan','Feb','Mar','Apr','May','June','Jul','Aug','Sept','Oct','Nov','Dec'],
                    datasets:[
                        {
                            label:"People being added to the contact tracing count each month",
                            data:datas,
                            backgroundColor:['red','orange','yellow','green','blue','indigo','violet','purple', 'pink','silver','gold','brown']
                        }
                    ]
                },
                option:{
                    scales:{
                        yAxes:[
                            {
                                ticks:{
                                    beginAtZero:true
                                }
                            }
                            
                        ]
                    }
                }

            });
        })


    </script>
</body>
</html>
@endsection