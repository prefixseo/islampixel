@extends('design.mocklayout.app')

@section('styles')
<style>
*{outline:0;}section{background: url('{{ asset('images/content-bg.png') }}');}
.profile-wrapper{
    display: flex;
    flex-direction: column;
    width: min(100%, 320px);
    align-items: center;
    margin: 20px auto;
}
</style>
<link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">{{ __($user->name) }}'s profile</h1>
        <div class="profile-wrapper">
                <img src="{{ asset($user->avatar) }}" alt="avatar profile" class="mb-3 rounded-circle"/>
                <p><b>{{ __($user->name) }}</b> <i>owned {{ \App\Models\pixelbox::where('userid', '=',$user->id)->get()->count() }} pixels</i></p>
                
                @if(Auth::check())
                    <p><a href='mailto:{{ __($user->email) }}'>{{ __($user->email) }}</a></p>
                @endif
                
                <p><i>Registered using: </i><b>{{ __($user->provider_name) }}</b></p>
                
                @if(Auth::check() && Auth::user()->id == $user->id)
                <a class="btn btn-danger btn-sm mt-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endif
        </div>
    </div>
</section>
@endsection