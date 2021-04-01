<style>
    footer{
        width:100%;
        height: auto;
        background: url('{{ asset('images/footer.png') }}');
        background-position: center;
        padding: 30px;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .ipx-footer-widgets-wrapper{
        padding: 20px;
        display: flex;
        justify-content: space-between;
    }
    .ipx-footer-widget{color: white;}
    .ipx-footer-nav{display:flex;justify-content: space-between;}
    .ipx-footer-nav > a { text-decoration: none;color: #9BC3C6;padding: 5px 10px; margin: 0 10px; }
    
    
    @media screen and (max-width: 767px){
        .ipx-footer-widgets-wrapper {
            flex-direction: column;
        }
        .ipx-footer-widget {
            text-align: center;
            margin-bottom: 17px;
        }
        .ipx-footer-nav {
            justify-content: center;
        }
        .ipx-social-nav {
            display: flex;
            justify-content: center;
        }
        .ipx-social-nav >a{
            padding: 0px 10px; margin: 5px 10px;
        }
    }
</style>
<footer>
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