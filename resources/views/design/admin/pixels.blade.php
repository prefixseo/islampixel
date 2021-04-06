@extends('design.mocklayout.app')

@section('styles')
<style>section{background: url('{{ asset('images/content-bg.png') }}');}
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
.listingTable{
    width: 100%;
    margin: 20px auto;
}
tr:hover {
    box-shadow: 0 2px 10px #ccc;
}
.listingTable td{padding: 4px;text-align:center;}
nav.flex{
    display: flex;
    justify-content: space-between;
}
nav.flex span,
nav.flex a{
    text-decoration: none;
    border: 1px solid teal;
    padding: 5px;
}
button[type="submit"] {
    border: 0;
    padding: 5px;
    background: #ec0000;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}
button[type="submit"]:hover {
    filter: grayscale(0.4);
}
</style>
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        @if(session()->has('msg'))
        <div class="ipx-server-response-msg">
            <b>{{ session()->get('msg') }}</b>
        </div>
        @endif
        @if(session()->has('error'))
        <div class="ipx-server-response-msg ipx-error">
            <b>{{ session()->get('error') }}</b>
        </div>
        @endif
        <h1 class="ipx-heading">Pixels Manager</h1>
        <table class="listingTable">
            <tr>
                <th>ID#</th>
                <th>BoxID#</th>
                <th>UserID#</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
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
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $pixels->links() }}
    </div>
</section>
@endsection

@section('scripts')

@endsection
