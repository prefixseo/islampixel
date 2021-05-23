@extends('design.mocklayout.app')

@section('styles')
<style
>section{background: url('{{ asset('images/content-bg.png') }}');}
.flex{
    display: flex;
}
.items-center{
    align-items: center;
}
.justify-between{
    justify-content: space-between
}
.flex-worp{
    flex-wrap: wrap;
}
.flex-1{
    flex-grow: 1;
}
.inline-flex{
    display: inline-flex;
}
.hidden{display:none;}
.font-medium{
    padding: 20px 10px;
    color: #666;
    font-weight: 500;
    font-size: 16px;
}
a.font-medium{
    color: teal;
}
.flex-col{
    flex-direction: column;
    min-height: auto;
}
.flex-row{
    flex-direction: row;
    min-width: auto;
}
img.boxshadow{
    box-shadow: 0 0 15px -3px #555;
    border-radius: 50%;
    padding: 5px;
    margin: 10px;
    width: 125px;
}
img.social-icon{
    width: 28px;
    transition-property: transform,filter; 
    transition-duration: .7s;
    transition-timing-function: ease-in-out;
}
.social-icon:hover{
    transform: rotate(360deg);
    filter: grayscale(1);
}
.record{
    padding: 10px;
    box-shadow: 0 0 10px -4px #333;
    border-radius: 15px;
    margin: 10px;
    width: 23%
}
.record > div{
    text-align: center;
}
.social-strip{
    margin-top: 20px;
}
.social-strip a{
    text-decoration: none;
}
@media screen and (max-width: 767px){
    .record{
        width: 100%;
    }
}
</style>
<link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">All Readers</h1>

        <div class="pagination">
            {{ $pixels->links() }}
        </div>
        
        <div class="flex flex-worp">
            @foreach($pixels as $p)
            <?php
            $user = \App\Models\User::getUserById($p->userid);
            ?>
                <div class="record">
                    <div>
                        <img class="boxshadow" src="{{ asset($user->avatar) }}" />
                        <h3>{{ $user->name }}</h3>
                    </div>
                    <div>
                        Pixel #<a href="{{ $p->weburl }}" target="_blank">{{ $p->boxid }}</a>
                    </div>
                    
                    <div>
                        Identity Image: <img src="{{ asset('emojis/'.$p->emoji_name) }}" />
                    </div>

                    <div class="social-strip">
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
            @endforeach
        </div>
       

        <div class="pagination">
            {{ $pixels->links() }}
        </div>
    </div>
</section>
@endsection


@section('scripts')

@endsection