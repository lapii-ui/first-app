@extends('layouts.app')

@section('content')
    <div class="title-content-info">Exchange Rate Information</div>
    <div class="row col-md-9 well">
    <form action="{{ url('update-pricelist/'.$price_lists->id) }}" method="POST">
            @csrf 

            <div class="form-group row">
                <label for="currency_id" class="col-md-4 col-form-label text-md-right">{{ __('Currency') }}</label>

                <div class="col-md-6">
                    <select name="currency_id", id="currency_id" class="form-control @error('currency_id') is-invalid @enderror">
                        @foreach ($currencies as $index => $currency)
                        <option value="{{ $currency->id }}" {{ $currency->id == $price_lists->currency_id ? 'selected' : '' }}>{{ $currency->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $price_lists->name }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="is_delete" class="col-md-4 col-form-label text-md-right">{{ __('Default') }}</label>
                <div class="col-md-6">
                    <input id="is_delete" type="checkbox" class="@error('is_delete') is-invalid @enderror" name="is_delete" {{ $price_lists->is_delete == 1 ? 'checked' : '' }}>
                </div>
            </div>
            <div class="col-md-10 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('Update')</button>
            </div>
        </form>
    </div>
@stop