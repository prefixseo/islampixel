@extends('design.mocklayout.app')

@section('styles')
<style>
.ipx-hero{background-image: url('{{ asset('images/hero.svg') }}');}
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
            <p class="ipx-light-text">Top <?=strtoupper($f->format(count($popular)))?></p>
            <h1 class="ipx-first-child-heading">Reader Country</h1>
            <!-- <button class="ipx-btn btn-block">
                See All
            </button> -->
        </div>

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

        @endif
    </div>

    @if(session()->has('msg'))
    <div class="ipx-server-response-msg">
        <b>{{ session()->get('msg') }}</b>
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
            <div class="ipx-modal-header">
            </div>
            <form method="post" action="{{ route('boxManager') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="pixelId" id="pixelIdVal">
                <div class="ipx-social-login-area">
                    <div id="ipx-darud-timer">Login will be active in 15 s</div>
                    @guest
                    <button type="submit" disabled name="facebook" class="ipx-login-facebook"> Countinue with Facebook</button>
                    <button type="submit" disabled name="google" class="ipx-login-google">Continue with Google</button>
                    @else
                    <button type="submit" disabled name="ownpixel" class="ipx-login-google">Continue <b>{{ Auth::user()->name }}</b> profile</button>
                    @endguest
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