@extends('layouts.app')

@section('content')
    <div class="title-content-info">Receipt Information</div>
    <div class="row col-md-9 well">
    <form action="{{ url('store-receipt')}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="branch_name" class="col-md-4 col-form-label text-md-right">{{ __('Branch Name') }}</label>
                <div class="col-md-6">
                    <input id="branch_name" type="text" class="form-control @error('branch_name') is-invalid @enderror" name="branch_name">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                <div class="col-md-6">
                    <textarea name="address" id="address" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="tel1" class="col-md-4 col-form-label text-md-right">{{ __('Tel 1') }}</label>
                <div class="col-md-6">
                    <input id="tel1" type="text" class="form-control @error('tel1') is-invalid @enderror" name="tel1">
                </div>
            </div>

            <div class="form-group row">
                <label for="tel2" class="col-md-4 col-form-label text-md-right">{{ __('Tel 2') }}</label>
                <div class="col-md-6">
                    <input id="tel2" type="text" class="form-control @error('tel2') is-invalid @enderror" name="tel2">
                </div>
            </div>

            <div class="form-group row">
                <label for="note_kh" class="col-md-4 col-form-label text-md-right">{{ __('Remark (KH)') }}</label>
                <div class="col-md-6">
                    <textarea name="note_kh" id="note_kh" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="note_en" class="col-md-4 col-form-label text-md-right">{{ __('Remark (EN)') }}</label>
                <div class="col-md-6">
                    <textarea name="note_en" id="note_en" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>
                <div class="col-md-6">
                    <input type="file" id="logo" name="logo">
                </div>
            </div>

            <div class="col-md-10 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('submit')</button>
            </div>
        </form>
    </div>
@stop