@extends('layouts.app')

@section('content')
    <div class="title-content-info">Edit Group Table Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('update-grouptable/'.$grouptable->id) }}" method="POST">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Group Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $grouptable->name }}" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{ $grouptable->type }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Remark') }}</label>

                <div class="col-md-6">
                    <textarea name="remark" id="remark" class="form-control">{{ $grouptable->remark }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="default" class="col-md-4 col-form-label text-md-right">{{ __('Auto Generate Table') }}</label>

                <div class="col-md-6">
                    <input id="default" type="checkbox" class="@error('default') is-invalid @enderror" name="default">
                </div>
            </div>
            <div class="col-md-10 remove-pdd">
                <button type="submit" class="pull-right remove-mg">@lang('update')</button>
            </div>
        </form>
    </div>
@stop