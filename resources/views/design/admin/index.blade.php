@extends('design.admin.layout.app')


@section('title', 'Dashboard')

@section('content')
<style>.avatar{width: 64px;border-radius:50%;}</style>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <div class="row">
            <div class="col-xl-6">
                <div class="card bg-primary text-center text-white mb-4">
                    <div class="card-body"><h3>{!! $pixelCount !!}</h3></div>
                    <div class="card-footer">
                        Owned Pixels
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card bg-success text-center text-white mb-4">
                    <div class="card-body"><h3>{!! $users->count() !!}</h3></div>
                    <div class="card-footer">
                        Registered Users
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-chart-bar mr-1"></i>
                        Statistics For Darud Readers
                    </div>
                    <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Registered Users
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Provider</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID#</th>
                                <th>Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Provider</th>
                                <th>Created At</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td><img src="{{ $user->avatar ? asset($user->avatar) : asset('images/profile-icon.png') }}" class="avatar" alt=""></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->provider_name ?: 'Direct Register' }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('script')

<script>
// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';
<?php
$country_id = array();
$values_y = array();

foreach($chart as $c){
    $country_id[] = \App\Models\pixelbox::getCountryByCountryId($c->country_id);
    $values_y[] = $c->y;
}
?>
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: {!! json_encode($country_id) !!},
    datasets: [{
      data: {{ json_encode($values_y) }},
      backgroundColor: [
        '#794DBE','#CDA5A7','#584550','#A961F4','#77E9AB','#424C21','#2B5388','#E1B416',
        '#70C6E2','#343DCE','#D33E3B','#7FB72B','#902025','#45746B','#CFFE90','#2CD9C6',
        '#881B75','#FB39CC','#7D9A38','#1546D2','#C69B4F','#62937F','#96EE3B','#81D2AF',
        '#A824E1'
      ],
    }],
  },
});
</script>

@endsection