@extends('layouts.app')

@section('content')
    <div class="title-content-info">Exchange Rate Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('update-exchange/'.$exchange->id) }}" method="POST">
            @csrf 
            <div class="form-group row">
                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date') }}</label>
                <div class="col-md-6">
                <input name="date_set" id="date" 
                    class="form-control pull-right @error('code') is-invalid @enderror" type="date" value="{{ $exchange->date_set }}" autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="currency_id" class="col-md-4 col-form-label text-md-right">{{ __('Currency') }}</label>

                <div class="col-md-6">
                    <select name="currency_id", id="currency_id" class="form-control @error('currency_id') is-invalid @enderror">
                        @foreach ($currencies as $index => $currency)
                            <option value="{{ $currency->id }}" {{ $currency->id == $exchange->currency_id ? 'selected' : '' }}>{{ $currency->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('Amount') }}</label>
                <div class="col-md-6">
                    <input id="amount" value="1" type="text" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ $exchange->amount }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="rate" class="col-md-4 col-form-label text-md-right">{{ __('Rate') }}</label>
                <div class="col-md-6">
                    <input id="rate" type="text" class="form-control @error('rate') is-invalid @enderror" name="rate" value="{{ $exchange->rate }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="default" class="col-md-4 col-form-label text-md-right">{{ __('Default') }}</label>
                <div class="col-md-6">
                    <input id="default" type="checkbox" class="@error('default') is-invalid @enderror" name="default" {{ $exchange->default == 1 ? 'checked' : '' }}>
                </div>
            </div>
            <div class="col-md-10 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('Update')</button>
            </div>
        </form>
    </div>
@stop