<header>
    <div class="ipx-main-nav">
        <a href="{{ url('/') }}">Home</a>
        <!-- <a href="{{ url('familytree') }}">Family Tree</a>
        <a href="{{ url('all-countries') }}">Countries</a> -->
        <a href="{{ url('all-readers') }}">Readers</a>
        <a href="{{ url('contact') }}">Contact</a>
        <?php
        if(!\Auth::guest()){
            ?>
            <a href="{{ url('profile') }}">Profile</a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
            <?php
        }else{
            ?>
            <a href="{{ url('login') }}">Login</a>
            <?php
        }
        ?>
    </div>
</header>