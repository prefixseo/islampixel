@extends('design.admin.layout.app')

@section('title','Create Pixel')

@section('content')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Create Pixel</h1>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control" type="number" name="_box_id" min="1" max="10000" placeholder="Pixel Number" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="_user_id" required>
                            <?=\App\Models\User::getUserDropdownOptions()?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="_country_id" required>
                            <?=\App\Models\pixelbox::getCountryDropdownOptions()?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-warning" type="submit">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

@section('scripts')

@endsection
