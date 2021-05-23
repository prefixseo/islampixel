@extends('design.mocklayout.app')

@section('styles')
<style>
.ipx-hero{background-image: url('{{ asset('images/hero.svg') }}');}
.waiting-text {
    color: #777;
    text-align: center;
    padding: 20px 0;
}
img.boxshadow{
    box-shadow: 0 0 15px -3px #555;
    border-radius: 50%;
    padding: 5px;
    margin: 10px;
    width: 125px;
}
.black-color{
    color: black !important;
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
    color: teal;
    background: white;
    position: relative;
    border-radius: 15px;
    margin: 10px auto !important;
    width: 40%;
}
a.btn-viewprofile {
    color: white;
    text-decoration: none;
    padding: 5px;
    background: teal;
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
<link rel="stylesheet" href="{{asset('css/indexStyle.css')}}">
@endsection

@section('content')
<section>
    <div class="ipx-hero"></div>


    <!-- Top Countries section -->
    <div class="ipx-hero-child">
            
        @if(isset($popular))
        <?php //$f = new NumberFormatter("en", NumberFormatter::SPELLOUT); ?>
        <div class="ipx-hero-child-first-child">
            <h1 class="ipx-first-child-heading">Brothers & Sisters Around the World</h1>
            <?php if(count($popular)>0){ ?><p class="ipx-light-text">Total Participants<br><?=count($popular)?></p><?php } ?>
        </div>
        <marquee style="display: flex;flex-direction: row;" onmouseover="this.stop();" onmouseout="this.start();">
            @if(count($popular) > 0)
                @foreach($popular as $p)
                    <div class="ipx-country-card">
                        @if(isset($p->country_id))
                        <div class="flagImage" style="background-image: url('https://flagcdn.com/w320/<?=strtolower($p->country_id)?>.png');"></div>
                        @else
                        <img src="{{ asset('images/question.png') }}">
                        @endif
                        <div class="ipx-card-description">
                            <p class="ipx-card-flag-name"><?=isset($p->country_id) ? \App\Models\pixelbox::getCountryByCountryId($p->country_id) : 'PK'?></p>
                            <p class="ipx-card-count"><?=isset($p->cnt) ? $p->cnt : '---'?> Readers</p>
                        </div>
                    </div>
                @endforeach
            @else
                <div style="text-align:center;padding-top:15px;flex-grow:1;color:#aaa;"> No Record Found</div>
            @endif
        @endif
        </marquee>
    </div>

    @if(session()->has('msg'))
    <div class="ipx-server-response-msg">
        <b>{!! session()->get('msg') !!}</b>
    </div>
    @endif
    <!-- Pixels -->
    <div class="ipx-pixels-section">
        <div class="ipx-pixel-container"></div>
    </div>

    <!-- Modal popup -->
    <div id="ipx-profile-modal" class="ipx-modal">
        <!-- Modal content&larr; -->
        <div class="ipx-modal-profile"></div>
        <div class="ipx-modal-content">
            <span class="close">&times;</span>
            <div class="ipx-modal-header"></div>
            <input type="hidden" name="pixelId" id="pixelIdVal">
            <div class="waiting-text">
                <h2 id="timer_count">00:00</h2>
                <h4>You Will Redirected to Next Step, once you Recited & Listened Darood Pak</h4>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{ asset('js/islampixel_updated.js') }}"></script>
<style>
.taken{background-size: contain !important;}
<?php
foreach($emoji_name as $v) {
    echo ".x" . str_replace(array('.gif','.png','.jpg','.jpeg','.webp','.ico','.bmp','.svg'),'',$v) . "{ background: url('".url("emojis/$v")."'); } \n";
}
?>
</style>
<script>
var loggedin = <?php if(Auth::check()) { echo 'true'; }else{ echo 'false'; } ?>;
var homeUrl = '{{ url('/') }}';var taken = [{{ implode(',',$boxIDs) }}];var taken_emoji_name = [<?="'" . implode( "', '", $emoji_name). "'"?>];
var darudListenedPingbackUri = '{{ url('/darudListenedPingback') }}'; var getprofileurl = '{{ route('ajaxGetProfile') }}'; var checkRequestPixelStatusUri = '{{ url('/checkRequestPixelStatus') }}'; var darud_audio_url = '{{ asset('audio/darud.mp3') }}';
</script>
@endsection