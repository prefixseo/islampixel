@extends('design.mocklayout.app')

@section('styles')
<style>
.ipx-hero{background-image: url('{{ asset('images/hero.svg') }}');}
.waiting-text {
    color: #777;
    text-align: center;
    padding: 20px 0;
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
        <?php $f = new NumberFormatter("en", NumberFormatter::SPELLOUT); ?>
        <div class="ipx-hero-child-first-child">
            <?php if(count($popular)>0){ ?><p class="ipx-light-text">Top <?=strtoupper($f->format(count($popular)))?></p><?php } ?>
            <h1 class="ipx-first-child-heading">Reader Country</h1>
            <!-- <button class="ipx-btn btn-block">
                See All
            </button> -->
        </div>
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
var darudListenedPingbackUri = '{{ url('/darudListenedPingback') }}'; var checkRequestPixelStatusUri = '{{ url('/checkRequestPixelStatus') }}'; var darud_audio_url = '{{ asset('audio/darud.mp3') }}';
</script>
@endsection