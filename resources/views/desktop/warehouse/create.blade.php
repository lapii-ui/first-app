@extends('layouts.app')

@section('content')
    <div class="title-content-info">Warehouse Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('add-warehouse') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Code') }}</label>

                <div class="col-md-6">
                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                </div>
            </div>

            <div class="form-group row">
                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                <div class="col-md-6">
                    {{--  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email">  --}}
                    <textarea name="location" id="location" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="default" class="col-md-4 col-form-label text-md-right">{{ __('Default') }}</label>

                <div class="col-md-6">
                    <input id="default" type="checkbox" class="@error('default') is-invalid @enderror" name="default">
                    <input id="stock_in" type="hidden" class="form-control @error('stock_in') is-invalid @enderror" name="stock_in" value="0.00">
                </div>
            </div>

            <div class="col-md-10 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('submit')</button>
            </div>
        </form>
    </div>
@stop