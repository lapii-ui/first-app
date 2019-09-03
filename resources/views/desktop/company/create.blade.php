@extends('layouts.app')

@section('content')
    <div class="title-content-info">Company Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('company') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone 1') }}</label>

                <div class="col-md-6">
                    <input id="phone1" type="tel" class="form-control @error('phone1') is-invalid @enderror" name="phone1">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone 2') }}</label>

                <div class="col-md-6">
                    <input id="phone2" type="tel" class="form-control @error('phone2') is-invalid @enderror" name="phone2">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="currency_id" class="col-md-4 col-form-label text-md-right">{{ __('Currency') }}</label>

                <div class="col-md-6">
                    <select id="currency_id" class="form-control @error('currency_id') is-invalid @enderror" name="currency_id">
                        <option value="1">KH-(R)</option>
                        <option value="2">USD-($)</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="default" class="col-md-4 col-form-label text-md-right">{{ __('Default') }}</label>

                <div class="col-md-6">
                    <input id="default" type="checkbox" name="default">
                    <input id="logo" type="hidden" name="logo" value="no-logo">
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                <div class="col-md-6">
                    <textarea name="address" id="address" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="remark" class="col-md-4 col-form-label text-md-right">{{ __('Remark') }}</label>

                <div class="col-md-6">
                    <textarea name="remark" id="remark" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-md-10 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('submit')</button>
            </div>
        </form>
    </div>
@stop