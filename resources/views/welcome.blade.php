@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Islam Pixel</h2>
            <p><em>Own Pixel By Reciting Darood Sharif</em></p>
        </div>
    </div>
    <div class="customgridwrap"></div>
</div>

<div class="modal fade" id="loginUserPixelModal" tabindex="-1" role="dialog" aria-labelledby="loginUserPixelModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginUserPixelModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id="daroodCheck">
            <div class="col-md-12">
                <p class="darood">
                    اللَّهُـمّ صَــــــلٌ علَےَ مُحمَّــــــــدْ و علَےَ آل مُحمَّــــــــدْ كما صَــــــلٌيت علَےَ إِبْرَاهِيمَ و علَےَ آل إِبْرَاهِيمَ إِنَّك حَمِيدٌ مَجِيدٌ ۝ 
                </p>
                <div class="form-check text-center my-4">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="daroodConfirmation">Have you read the Darood Pak?
                    </label>
                </div>
            </div>
        </div>
        <form method="post" action="{{ route('boxManager') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="pixelId" id="pixelIdVal">
            <div class="form-group row login-form">
                <div class="col-md-6">
                    <button type="submit" name="google" disabled class="btn btn-danger btn-block login-btn-after-darood">Google</button>
                </div>
                <div class="col-md-6">
                    <button type="submit" name="facebook" disabled class="btn btn-primary btn-block login-btn-after-darood">Facebook</button>
                </div>
            </div>
        </form>
        <div class="profile-data text-center">
            <div class="myloader"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>let taken = [{{ implode(',',$boxIDs) }}];let taken_country = [<?="'" . implode( "', '", $country_ids). "'"?>];let ajaxUrl = '{{ route("ajaxGetProfile") }}';</script>
@endsection
