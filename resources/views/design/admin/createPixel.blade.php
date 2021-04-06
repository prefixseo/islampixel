@extends('design.mocklayout.app')

@section('styles')
<style>
section{background: url('{{ asset('images/content-bg.png') }}');}
section{
    background-position: bottom center;
    padding-top: 100px;
    background-size: cover;
}
.ipx-content-area{
    background: white;
    width: min(90%,1100px);
    margin: 0px auto;
    padding: 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

button[type="submit"] {
    border: 0;
    padding: 10px;
    background: teal;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}
button[type="submit"]:hover {
    filter: grayscale(0.5);
}
form{
    display: flex;
    width: 480px;
    margin: 0px auto;
    flex-direction: column;
}
form > *{margin: 10px 0;}
input[type="number"],select{
    border: 1px solid #000;
    padding: 10px;
    font-size: 20px;
    margin: 5px;
    border-radius: 25px;
}
/* Chrome, Safari, Edge, Opera */
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
@endsection

@section('content')
<section>
    <div class="ipx-content-area">
        <h1 class="ipx-heading">Create Pixel</h1>
        <form method="post">
            {{ csrf_field() }}
            <input type="number" name="_box_id" min="1" max="10000" placeholder="Pixel Number" required>
            <select name="_user_id" required>
                <?=\App\Models\User::getUserDropdownOptions()?>
            </select>
            <select name="_country_id" required>
                <?=\App\Models\pixelbox::getCountryDropdownOptions()?>
            </select>
            <button type="submit">Create</button>
        </form>
    </div>
</section>
@endsection

@section('scripts')

@endsection
