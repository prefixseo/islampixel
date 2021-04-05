@extends('design.mocklayout.app')

@section('styles')
<style>section{background: url('{{ asset('images/content-bg.png') }}');}</style>
<link rel="stylesheet" href="{{ asset('css/shajraStyle.css') }}">
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <img src="{{ asset('images/holy-prophet-family-tree.png') }}" ondragstart="return false;" oncontextmenu="return false;" alt="">
    </div>
</section>
@endsection