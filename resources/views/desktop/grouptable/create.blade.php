@extends('layouts.app')

@section('content')
    <div class="title-content-info">Group Table Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('store-grouptable') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                <div class="col-md-6">
                    <input id="type" type="text" class="form-control @error('type') is-invalid @enderror" name="type">
                </div>
            </div>

            <div class="form-group row">
                <label for="remark" class="col-md-4 col-form-label text-md-right">{{ __('Remark') }}</label>
                <div class="col-md-6">
                    <textarea name="remark" id="remark" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="is_delete" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                <div class="col-md-6">
                    <input id="is_delete" type="checkbox" class="@error('is_delete') is-invalid @enderror" name="is_delete">
                </div>
            </div>

            <div class="col-md-10 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('submit')</button>
            </div>
        </form>
    </div>
@stop