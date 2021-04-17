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
        <h1 class="mt-4">Pixels</h1>
        <div class="card mb-2">
            <div class="card-header">
                <i class="fas fa-cubes mr-1"></i>
                Owned Pixels By Users
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
                    <div class="col-md-6 text-right">
                        <a href="{{ url('admin/createpixel') }}" class="btn btn-primary">
                            Assign Custom Pixel
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID#</th>
                                <th>BoxID#</th>
                                <th>UserID#</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID#</th>
                                <th>BoxID#</th>
                                <th>UserID#</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($pixels as $px)
                                <tr>
                                    <td>{{ $px->id }}</td>
                                    <td>{{ $px->boxid }}</td>
                                    <td>{{ \App\Models\User::getUserNameById($px->userid) }}</td>
                                    <td>{{ \App\Models\pixelbox::getCountryByCountryId($px->country_id) }}</td>
                                    <td>
                                        <form action="{{ url('/admin/pixeldelete') }}" method="POST" onsubmit="return confirm('Are you Sure to Delete?');">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_box_id" value="{{ $px->id }}">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $pixels->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


@section('script')
<script>
$(document).ready(function(){
    var val = window.location.href.split('/pixels/')[1];
    if(val.length > 0)
    {
        console.log(val);
        document.getElementById('filter_country').value = val;
    }
});
function showFilterResult(key){
    window.location.href = window.location.href.split('/pixels')[0] + '/pixels/'+key;
}
</script>
@endsection
