@extends('design.admin.layout.app')


@section('title', 'Advertisement')

@section('content')
<style>.avatar{width: 64px;border-radius:50%;}</style>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Advertisement</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-bullhorn mr-1"></i>
                Ad Code
            </div>
            <div class="card-body">
                <form method="post">
                    {{ csrf_field() }}
                    <div>
                        <!-- class="form-group" <label for="advertise_name">Footer Ad Code:</label> -->
                        <input type="hidden" id="advertise_name" name="advertise_name" value="footer">
                    </div>
                    <div class="form-group">
                        @if(isset($ad_code[0]))
                            <input type="hidden" name="update" value="1">
                        @endif
                        <label for="advertise_code">Footer Ad Code:</label>
                        <textarea class="form-control" rows="10" id="advertise_code" name="advertise_code" placeholder="Enter Advertisement Code"><?php
                            if(count($ad_code) > 0 && isset($ad_code[0]))
                            {
                                echo $ad_code[0]->adcode;
                            }
                        ?></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection

@section('script')
<script>
    // -- Script Here
</script>
@endsection