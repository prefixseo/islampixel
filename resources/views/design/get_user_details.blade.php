@extends('design.mocklayout.app')

@section('styles')
<style>*{outline:0;}section{background: url('{{ asset('images/content-bg.png') }}');}</style>
<link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
<style>
.selection_values{
    display: flex;
    justify-content: space-evenly;
    margin: 10px 0;
}
select {
    border: 1px solid #000;
    padding: 10px;
    font-size: 20px;
    margin: 5px;
    border-radius: 25px;
}
</style>
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">Fill Details & Own Pixel</h1>
        @if(session()->has('msg'))<p class="ipx-response-box">{{ session()->get('msg') }}</p> @endif
        <form class="ipx-form" method="post" action="{{ route('submitpixelRequest') }}">
            <div class="selection_values">
                <strong>Selected Pixel #_{{$boxid}}</strong>
                <strong>Selected Image <img src='{{ asset("emojis/".$emoji_name) }}'/></strong>
            </div>
            {{csrf_field()}}
            <input type="hidden" name="ipx-boxid" value="{{$boxid}}">
            <input type="hidden" name="ipx-emoji_name" value="{{$emoji_name}}">
            <input type="url" name="ipx-weburl" placeholder="Website Url" required>
            <input type="text" name="ipx-title" value="{{ Auth::check() ? Auth::user()->name : ''}}" placeholder="Title" required>
            <input type="email" name="ipx-email" value="{{ Auth::check() ? Auth::user()->email : ''}}"  placeholder="Email Address" required>
            <select name="ipx-country_id" required>
                <option></option>
                <?=\App\Models\pixelbox::getCountryDropdownOptions()?>
            </select>
            <button type="submit">Request Pixel</button>
        </form>
    </div>
</section>
@endsection