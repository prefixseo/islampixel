@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-center">
                    @if(Auth::user())
                        <img src="{{ Auth::user()->avatar.'&access_token='.Auth::user()->provider_token }}" alt="avatar profile" class="mb-3 rounded-circle"/>
                        <h4>{{ __(Auth::user()->name) }}</h4>
                        <p>{{ __(Auth::user()->email) }}</p>
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
            </div>
        </div>
    </div>
</div>
@endsection