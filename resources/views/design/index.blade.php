@extends('design.mocklayout.app')

@section('styles')
<style>
.ipx-hero{background-image: url('{{ asset('images/darood.png') }}'), url('{{ asset('images/hero.svg') }}');}
</style>
<link rel="stylesheet" href="{{asset('css/indexStyle.css')}}">
@endsection

@section('content')
<section>
    <div class="ipx-hero">
        <div class="ipx-hero-child">
            <div class="ipx-hero-child-first-child">
                <p class="ipx-light-text">Top Three</p>
                <h1 class="ipx-first-child-heading">Reader Country</h1>
                <!-- <button class="ipx-btn btn-block">
                    See All
                </button> -->
            </div>
            <div class="ipx-country-card">
                <img src="//www.countryflags.io/<?=isset($popular[0]->country_id) ? $popular[0]->country_id : 'PK'?>/flat/64.png" alt="">
                <div class="ipx-card-description">
                    <p class="ipx-card-flag-name"><?=isset($popular[0]->country_id) ? $popular[0]->country_id : 'PK'?></p>
                    <p class="ipx-card-count">Reader(s): <?=isset($popular[0]->cnt) ? $popular[0]->cnt : '---'?></p>
                </div>
            </div>
            <div class="ipx-country-card">
                <img src="//www.countryflags.io/<?=isset($popular[1]->country_id) ? $popular[1]->country_id : 'PK'?>/flat/64.png" alt="">
                <div class="ipx-card-description">
                    <p class="ipx-card-flag-name"><?=isset($popular[1]->country_id) ? $popular[1]->country_id : 'PK'?></p>
                    <p class="ipx-card-count">Reader(s): <?=isset($popular[1]->cnt) ? $popular[1]->cnt : '---'?></p>
                </div>
            </div>
            <div class="ipx-country-card">
                <img src="//www.countryflags.io/<?=isset($popular[2]->country_id) ? $popular[2]->country_id : 'PK'?>/flat/64.png" alt="">
                <div class="ipx-card-description">
                    <p class="ipx-card-flag-name"><?=isset($popular[2]->country_id) ? $popular[2]->country_id : 'PK'?></p>
                    <p class="ipx-card-count">Reader(s): <?=isset($popular[2]->cnt) ? $popular[2]->cnt : '---'?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pixels -->
    <div class="ipx-pixels-section">
        <div class="ipx-pixel-container"></div>
    </div>

    <!-- Modal popup -->
    <div id="ipx-profile-modal" class="ipx-modal">
        <!-- Modal content -->
        <div class="ipx-modal-content">
            <span class="close">&larr;</span>
            <div class="ipx-modal-header">
            </div>
            <form method="post" action="{{ route('boxManager') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="pixelId" id="pixelIdVal">
                <div class="ipx-social-login-area">
                    <button type="submit" name="facebook" class="ipx-login-facebook"> Countinue with Facebook</button>
                    <button type="submit" name="google" class="ipx-login-google">Continue with Google</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
@section('scripts')
<script src="{{ asset('js/islampixel_new.js') }}"></script>
<script>
let taken = [{{ implode(',',$boxIDs) }}];let taken_country = [<?="'" . implode( "', '", $country_ids). "'"?>];let ajaxUrl = '{{ url("ajaxGetUserDetails") }}';

// Get the modal
$('.ipx-pixel-container').click(function(){
    $('#ipx-profile-modal').fadeIn();
});


    
</script>
@endsection