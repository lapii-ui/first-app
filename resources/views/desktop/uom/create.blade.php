@extends('layouts.app')

@section('content')
    <div class="title-content-info">Unit of Measure Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('uom') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="code" class="col-md-3 col-form-label text-md-right">{{ __('Code') }}</label>

                <div class="col-md-6">
                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code">
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control text_color @error('name') is-invalid @enderror" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="make_group" class="col-md-3 col-form-label text-md-right">{{ __('Make Group') }}</label>

                <div class="col-md-6">
                    <input id="make_group" type="checkbox" name="make_group" value="1">
                    <input id="is_delete" type="hidden" name="is_delete" value="0">
                </div>
            </div>

            <div class="col-md-9 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('submit')</button>
            </div>
        </form>
    </div>
@stop