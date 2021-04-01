<style>
header{
    background: white;
    box-shadow: 0 5px 10px #ccc;
}
.ipx-main-nav{
    display: flex;
    padding: 10px;
    width: min(100%, 1100px);
    margin: 0px auto;
}
.ipx-main-nav > a{
    text-decoration: none;
    color: #cfcfcf;
    padding: 13px 15px;
    font-size: 22px;
}
.ipx-main-nav > a:hover{
    color: #888;
}
</style>
<header>
    <div class="ipx-main-nav">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('familytree') }}">Family Tree</a>
        <a href="{{ url('contact') }}">Contact</a>
    </div>
</header>