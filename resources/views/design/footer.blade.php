<footer style="background: url('{{ asset('images/footer.png') }}');">
    <div class="ipx-footer-content">
        <div class="ipx-footer-widgets-wrapper">
            <div class="ipx-footer-widget">
                <h1>{{ config('app.name', 'Laravel') }}</h1>
            </div>
            <div class="ipx-footer-widget">
                <div class="ipx-footer-nav">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Contact</a>
                </div>
            </div>
            <div class="ipx-footer-widget">
                <div class="ipx-social-nav">
                    <a href="#facebook"><img src='{{ asset('images/facebook.png') }}'/></a>
                    <a href="#twitter"><img src='{{ asset('images/twitter.png') }}'/></a>
                    <a href="#instagram"><img src='{{ asset('images/insta.png') }}'/></a>
                </div>
            </div>
        </div>
    </div>
</footer>