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
.avatar{width: 64px;border-radius:50%;}
</style>
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">Users Manager</h1>
        <table class="listingTable">
            @foreach ($users as $user)
                <tr>
                    <td><img src="{{ asset($user->avatar) }}" class="avatar" alt=""></td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->provider_name }}</td>
                </tr>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
</section>
@endsection

@section('scripts')

@endsection
