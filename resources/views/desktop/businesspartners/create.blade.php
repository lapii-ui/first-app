@extends('layouts.app')

@section('content')
    <div class="title-content-info">Business Partner Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('store-businesspartner') }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Partner Code') }}</label>
                <div class="col-md-6">
                    <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code">
                </div>
            </div>
            <div class="form-group row">
                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Partner Type') }}</label>
                <div class="col-md-6">
                    <select id="type" name="type" class="form-control @error('type') is-invalid @enderror">
                            <option value="0">General Customer</option>
                            <option value="1">General Vender</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Partner Name') }}</label>
                <div class="col-md-6">
                    <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                <div class="col-md-6">
                    <textarea name="location" id="location" class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="price_list_id" class="col-md-4 col-form-label text-md-right">{{ __('Price List') }}</label>
                <div class="col-md-6">
                    <select id="price_list_id" name="price_list_id" class="form-control @error('price_list_id') is-invalid @enderror">
                        @foreach ($price_lists as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone">
                </div>
            </div>

            <div class="form-group row">
                <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>
                <div class="col-md-6">
                    <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                <div class="col-md-6">
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email">
                </div>
            </div>
            
            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                <div class="col-md-6">
                    <input type="file" id="image" name="image">
                </div>
            </div>

            <div class="form-group row">
                <label for="is_delete" class="col-md-4 col-form-label text-md-right">{{ __('Default') }}</label>
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