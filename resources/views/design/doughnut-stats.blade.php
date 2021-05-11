@extends('design.mocklayout.app')

@section('styles')
<style
>section{background: url('{{ asset('images/content-bg.png') }}');}
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
<link rel="stylesheet" href="{{ asset('css/shajraStyle.css') }}">
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">All Countries</h1>
        <div id="chartdiv"></div>
    </div>
</section>
@endsection


@section('scripts')
<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.PieChart);

// Add data
chart.data = <?php 
$arr_vars = array();
foreach($chart as $c){
    array_push($arr_vars, array(
        'country' => \App\Models\pixelbox::getCountryByCountryId($c->country_id),
        'readers' => $c->y
    ));
}
echo json_encode($arr_vars);
 ?>;

// Set inner radius
chart.innerRadius = am4core.percent(50);

// Add and configure Series
var pieSeries = chart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "readers";
pieSeries.dataFields.category = "country";
pieSeries.slices.template.stroke = am4core.color("#fff");
pieSeries.slices.template.strokeWidth = 2;
pieSeries.slices.template.strokeOpacity = 1;

// This creates initial animation
pieSeries.hiddenState.properties.opacity = 1;
pieSeries.hiddenState.properties.endAngle = -90;
pieSeries.hiddenState.properties.startAngle = -90;

}); // end am4core.ready()
</script>
@endsection