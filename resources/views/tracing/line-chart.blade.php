@extends('tracing.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Contact Tracing: Line Chart</title>
</head>
<body>
    <div id="chart-container" ></div>

    <script src="https://code.highcharts.com/highcharts.js"></script>    
    <script>
        var datas= <?php echo json_encode($datas) ?>;
        console.log(datas);
        Highcharts.chart('chart-container', {
            title:{
                text:"People being added to the contact tracing count each month"
            },
            subtitle:{
                text:"Gigachadthis"
            },
            xAxis:{
                categories:['Jan','Feb','Mar','Apr','May','June','Jul','Aug','Sept','Oct','Nov','Dec']
            },
            yAxis:{
                title:{
                    text:"People Added Count"
                }
            },
            plotOptions:{
                series:{
                    allowPointSelect:true
                }
            },
            series:[{
                name:'New Individual Included in the Contact Tracing',
                data:datas
            }],
            responsive:{
                rules:[
                    {
                        chartOption:{
                            legend:{
                                layout:'vertical',
                                verticalAlign:'bottom'
                            }
                        }
                         
                    }
                ]
            }

        })
    </script>
</body>
</html>
@endsection
