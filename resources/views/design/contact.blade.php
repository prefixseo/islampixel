@extends('design.mocklayout.app')

@section('styles')
<style>*{outline:0;}section{background: url('{{ asset('images/content-bg.png') }}');}</style>
<link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">Contact US</h1>
        @if(session()->has('msg'))<p class="ipx-response-box">{{ session()->get('msg') }}</p> @endif
        <form class="ipx-form" method="post">
            {{csrf_field()}}
            <input type="text" name="ipx-username" value="{{ Auth::check() ? Auth::user()->name : '' }}" placeholder="Your Name" required>
            <input type="email" name="ipx-email" value="{{ Auth::check() ? Auth::user()->email : '' }}" placeholder="Email Address" required>
            <input type="text" name="ipx-subject" placeholder="Subject" required>
            <textarea name="ipx-message" placeholder="Explain Requirement" required cols="30" rows="10"></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</section>
@endsection