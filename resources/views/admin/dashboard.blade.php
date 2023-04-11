@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

<!-- Content Row -->
    

    <!-- Content Row -->

</div>
<div class="panel">
    <div id="chartSubcategories"></div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartSubcategories', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Grafik Hasil Quis'
    },
    subtitle: {
        text: 'QIS-SIAKAD'
    },
    xAxis: {
        categories: [
            'Suitability',
            'Accurateness',
            'Interoperabilty',
            'Security',
            'Functionality',
            'Maturity',
            'Fault Tolerance',
            'Recoverability',
            // 'Sep',
            // 'Oct',
            // 'Nov',
            // 'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'ponits'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} points</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Hasil quis berdasarkan subcategory',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 80 ]

    }]
}); 
</script>
<br>
<br>
<br>
<div class="panel">
    <div id="chartCategories"></div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
Highcharts.chart('chartCategories', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik  Hasil Quis'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: 'points'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} points'
            }
        }
    },
    series: [{
        name: 'Category',
        colorByPoint: true,
        data: [{
            name: 'Functionality',
            y: 70.67,
            // sliced: true,
            // selected: true
        }, {
            name: 'Reliability',
            y: 14.77
        },  {
            name: 'Usability',
            y: 4.86
        }, {
            name: 'Efficiency',
            y: 2.63
        }, {
            name: 'Maintainabilty',
            y: 1.53
        },  {
            name: 'Portability',
            y: 1.40
        }, {
        //     name: 'Sogou Explorer',
        //     y: 0.84
        // // }, {
        // //     name: 'QQ',
        // //     y: 0.51
        // // }, {
        // //     name: 'Other',
        // //     y: 2.6
        }]
    }]
});
</script>
@endsection