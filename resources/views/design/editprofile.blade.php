@extends('design.mocklayout.app')

@section('styles')
<style>*{outline:0;}section{background: url('{{ asset('images/content-bg.png') }}');}</style>
<link rel="stylesheet" href="{{ asset('css/contactStyle.css') }}">
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">Update Password</h1>
        @if(session()->has('msg'))<p class="ipx-response-box">{{ session()->get('msg') }}</p> @endif
        <form class="ipx-form" action="{{ url('/profile/'.$user->id.'/edit') }}" method="POST">
            {{csrf_field()}}
            <input type="password" name="ipx-password" id="pas" placeholder="Enter New Password" required>
            <input type="password" name="ipx-cpassword" id="cpas" placeholder="Enter Confirm Password" required>
            <sup class="password-error" style="margin-left:20px;display:none;color:red;">Both Password is not Same (Min Length 8 char)</sup>
            <button type="submit" id="submit-password" disabled>Update</button>
        </form>

        <h1 class="ipx-heading">Update Profile Photo</h1>
        <form class="ipx-form" enctype="multipart/form-data" action="{{ url('/profilephoto/'.$user->id.'/edit') }}" method="POST">
            {{csrf_field()}}
            <input type="file" name="ipx-new-avatar" required>
            <button type="submit">Update Profile Photo</button>
        </form>

        <h1 class="ipx-heading">Social Media Links</h1>
        <form class="ipx-form" action="{{ url('/profilesocialmedia/'.$user->id.'/edit') }}" method="POST">
            {{csrf_field()}}
            <input type="url" name="ipx-fb" value="{{ $user->social_fb }}" placeholder="Enter Facebook Profile Url">
            <input type="url" name="ipx-insta" value="{{ $user->social_insta }}" placeholder="Enter Instagram Profile Url">
            <input type="url" name="ipx-yt" value="{{ $user->social_yt }}" placeholder="Enter Youtube Channel Url">
            <input type="url" name="ipx-twt" value="{{ $user->social_twt }}" placeholder="Enter Twitter Profile Url">
            <input type="url" name="ipx-github" value="{{ $user->social_github }}" placeholder="Enter Github Profile Url">
            <input type="url" name="ipx-lin" value="{{ $user->social_lin }}" placeholder="Enter Linkedin Profile Url">
            <button type="submit">Update Social Profiles</button>
        </form>

    </div>
</section>
@endsection


@section('scripts')
<script>
$("#pas , #cpas").on('keyup',function (){
    if($("#pas").val().length > 8 && $("#pas").val() == $("#cpas").val()){
        $('.password-error').hide();
        $('#submit-password').attr('disabled', false);
    }else{
        $('.password-error').show();
        $('#submit-password').attr('disabled', true);
    }
});
</script>
@endsection