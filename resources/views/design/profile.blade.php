@extends('design.mocklayout.app')

@section('styles')
<style>
*{outline:0;}section{background: url('{{ asset('images/content-bg.png') }}');}
.profile-wrapper{
    width: 80%;
    align-items: center;
    margin: 20px auto;
}
.d-flex{display: flex;}
.col{flex-direction: column;}
.row{flex-direction: row;}
.justify-center{justify-content: center;}
.column-gap{column-gap: 20px;}

.boxshadow{
    box-shadow: 0 0 15px -3px #555;
    border-radius: 50%;
    padding: 5px;
    margin: 10px;
}
.btn{
    text-decoration: none;
    background: teal;
    color: white;
    padding: 10px;
    margin: 5px;
    width: 120px;
    text-align: center;
}
.text-center > *{
    margin: 10px;
}
.social-icon{
    width: 48px;
    transition-property: transform,filter; 
    transition-duration: .7s;
    transition-timing-function: ease-in-out;
}
.social-icon:hover{
    transform: rotate(360deg);
    filter: grayscale(1);
}
</style>
<link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">{{ __($user->name) }}'s profile</h1>
        
        <div class="d-flex profile-wrapper row justify-center column-gap">
            @if($user->avatar)
            <img src="{{ asset($user->avatar) }}" alt="avatar profile" class="boxshadow"/>
            @endif

            <div class="d-flex col text-center">
                @if(Auth::check())
                    <p><a href='mailto:{{ __($user->email) }}'>{{ __($user->email) }}</a></p>
                    <p>Provider: </i><b>{{ __($user->provider_name) }}</b></p>
                    <a href="{{ url('/profile/'.$user->id.'/edit') }}" class="btn"> Edit Profile</a>
                @else
                    <p>Provider: </i><b>{{ __($user->provider_name) }}</b></p>
                @endif
            
            </div>
        </div>


        <div class="d-flex row justify-center text-center">
            @if($user->social_fb != null)
                <a href="{!!  $user->social_fb !!}" target="_blank">
                    <img src="{{ url('/images/fb.png') }}" class="social-icon" alt="facebook profile link">
                </a>
            @endif
            
            @if($user->social_insta != null)
                <a href="{!!  $user->social_insta !!}" target="_blank">
                    <img src="{{ url('/images/instagram.png') }}" class="social-icon" alt="instagram profile link">
                </a>
            @endif

            @if($user->social_yt != null)
                <a href="{!!  $user->social_yt !!}" target="_blank">
                    <img src="{{ url('/images/youtube.png') }}" class="social-icon" alt="youtube channel link">
                </a>
            @endif

            @if($user->social_twt != null)
                <a href="{!!  $user->social_twt !!}" target="_blank">
                    <img src="{{ url('/images/tweet.png') }}" class="social-icon" alt="twitter profile link">
                </a>
            @endif

            @if($user->social_github != null)
                <a href="{!!  $user->social_github !!}" target="_blank">
                    <img src="{{ url('/images/github.png') }}" class="social-icon" alt="github profile link">
                </a>
            @endif

            @if($user->social_lin != null)
                <a href="{!!  $user->social_lin !!}" target="_blank">
                    <img src="{{ url('/images/linkedin.png') }}" class="social-icon" alt="linkedin profile link">
                </a>
            @endif
            
            @if($user->social_reddit != null)
                <a href="{!!  $user->social_reddit !!}" target="_blank">
                    <img src="{{ url('/images/reddit.png') }}" class="social-icon" alt="reddit profile link">
                </a>
            @endif
        </div>
        
    </div>
</section>
@endsection