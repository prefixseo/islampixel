@extends('design.admin.layout.app')

@section('title','Pixels Manager')

@section('content')
<main>
    <div class="container-fluid">
        @if(session()->has('msg'))
        <div class="alert alert-success fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
            </button>
            <strong>Hooray!</strong> 
            {{ session()->get('msg') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="alert alert-danger fade in alert-dismissible show">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true" style="font-size:20px">×</span>
            </button>
            <strong>Headsup!</strong> 
            {{ session()->get('error') }}
        </div>
        @endif
        <h1 class="mt-4">Pixel Requests</h1>
        <div class="card mb-2">
            <div class="card-header">
                <i class="fas fa-cubes mr-1"></i>
                Requested Pixels By Users
            </div>
            <div class="card-body">
                <div class="row my-2">
                    <div class="col-md-6">
                        <label>Filter:
                        <select class="form-control" id="filter_country" onchange="showFilterResult(this.value)">
                            <option value="" selected>All Country</option>
                            <?=\App\Models\pixelbox::getCountryDropdownOptions()?>
                        </select></label>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>BoxID#</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID#</th>
                                <th>BoxID#</th>
                                <th>Email</th>
                                <th>Country</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($reqpixels as $px)
                                <tr>
                                    <td>{{ $px->id }}</td>
                                    <td>{{ $px->boxid }}</td>
                                    <td><a href="mailto:{{ $px->email }}">{{ $px->email }}</a></td>
                                    <td>{{ \App\Models\pixelbox::getCountryByCountryId($px->country_id) }}</td>
                                    <td>{!! ($px->activated) ? '<span class="badge text-light bg-success p-1">Activated</span>' : '<span class="badge text-light bg-danger p-1">Deactivated</span>' !!}</a></td>
                                    <td class="btn-group">
                                        @if($px->activated)
                                        <a href="{{ url('/admin/deactiverequestedpixel/'.$px->id) }}" onclick="return confirm('Are you Sure to Deactivate this Pixel?');" class="btn btn-warning btn-sm">Deactivate</a>
                                        @else
                                        <a href="{{ url('/admin/activerequestedpixel/'.$px->id) }}" onclick="return confirm('Are you Sure to Approve this Pixel?');" class="btn btn-success btn-sm">Activate</a>
                                        @endif
                                        <div>&nbsp;</div>
                                        <a href="{{ url('/admin/destroyrequestedpixel/'.$px->id) }}" onclick="return confirm('Are you Sure to Delete this Pixel?');" class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $reqpixels->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


@section('script')
<script>
$(document).ready(function(){
    var val = window.location.href.split('/requestedpixels/')[1];
    if(val.length > 0)
    {
        console.log(val);
        document.getElementById('filter_country').value = val;
    }
});
function showFilterResult(key){
    window.location.href = window.location.href.split('/requestedpixels')[0] + '/requestedpixels/'+key;
}
</script>
@endsection
