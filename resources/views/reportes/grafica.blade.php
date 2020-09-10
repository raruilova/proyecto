@extends('layouts.app')

@section('content')
<div class="container">
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Snack', 'Cantidad'],
         @foreach($snacks as $snack)
         ['{{$snack->nombre}}',{{$snack->Numero}}],
         @endforeach
        ]);

        var options = {
          width: 800,
          legend: { position: 'none' },
          chart: {
            title: 'Cantidad de snacks',
            subtitle: '' },
          axes: {
            x: {
              0: { side: 'top', label: 'Snacks'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        // Convert the Classic options to Material options.
        chart.draw(data, google.charts.Bar.convertOptions(options));
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 800px; height: 600px;"></div>
  </body>
</html>
</div>

@endsection