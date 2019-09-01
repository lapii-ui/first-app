@extends('layouts.app')

@section('content')
    <div class="title-content-info">Sub Category I Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('add-sub-i') }}" method="POST">
            @csrf
            <input id="cat_id" type="hidden" name="cat_id" value="{{ request()->get('id') }}">
            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Text Color') }}</label>

                <div class="col-md-6">
                    <input id="text_color" type="color" class="form-control text_color @error('text_color') is-invalid @enderror" name="text_color">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Background Color') }}</label>

                <div class="col-md-6">
                    <input id="background_color" type="color" class="form-control background_color @error('background_color') is-invalid @enderror" name="background_color">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Icon') }}</label>

                <div class="col-md-6">
                    <input id="icon" type="text" class="form-control icon @error('icon') is-invalid @enderror" name="icon">
                </div>
            </div>
            <div class="form-group row">
                <label for="location" class="col-md-3 col-form-label text-md-right">{{ __('Remark') }}</label>

                <div class="col-md-6">
                    <textarea name="remark" id="remark" class="form-control"></textarea>
                </div>
            </div>

            <div class="col-md-3" style="position: absolute;right:5px; top:6%;">
                <div class="background" style="min-height: 245px;border-radius: 4px;border: 1px solid #999;">
                    <div class="icon-sample"></div>
                    <div class="text-color" style="text-align:center; vertical-align:middle; font-family:lato; font-size:25px; font-weight: bold; line-height: 245px;">Demo</div>
                </div>
            </div>

            <div class="col-md-9 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('submit')</button>
            </div>
        </form>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/desktop/_category.js') }}"></script>
@endsection