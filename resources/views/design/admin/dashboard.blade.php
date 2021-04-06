@extends('design.mocklayout.app')

@section('styles')
<style>.canvasjs-chart-credit{display:none;}section{background: url('{{ asset('images/content-bg.png') }}');}
section{
    background-position: bottom center;
    padding-top: 100px;
    background-size: cover;
}
.ipx-content-area{
    background: white;
    width: min(90%,1100px);
    margin: 0px auto;
    padding: 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
.ipx-content-area img{
    width: 100%;
}
#chartContainer{
    height: 300px; width: 60%; margin: 0 auto;
}
</style>
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <div id="chartContainer" style=""></div>
    </div>
</section>
@endsection

@section('scripts')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js" defer></script>
<script>
window.onload = function() {
    var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
            text: "Darud Readers Stats Around Globe (Total: <?=array_sum(array_column($chart,'y'))?> Readers)"
        },
        data: [{
            type: "pie",
            startAngle: 240,
            yValueFormatString: "##0\" Readers\"",
            indexLabel: "{country_id} {y}",
            dataPoints: <?=json_encode($chart)?>
        }]
    });
    chart.render();
}
</script>
@endsection
