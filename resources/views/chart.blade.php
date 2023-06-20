@extends('layouts.appLayout')
@section('konten')
<html>
<head>
  <style>
    body{
      background-color: white;
    }
  </style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'exschool');
            data.addColumn('number', 'Jumlah');

            data.addRows([
                @foreach ($exschoolCounts as $exschool => $jumlah)
                    ['{{ $exschool }}', {{ $jumlah }}],
                @endforeach
            ]);

            var options = {
                title: 'Perbandingan pemilihan exschool',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>

    {{-- new chart --}}
    
</body>
</html>
@endsection