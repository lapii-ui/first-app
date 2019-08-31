@extends('layouts.app')

@section('content')
    <div class="title-content-info">Edit User Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('update-profile/'.$profile->id) }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $profile->name }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $profile->email }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autofocus>
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                <div class="col-md-6">
                    <select name="role" id="role" class="form-control" >
                        <option value="00"></option>
                        {{-- <option value="0">Root</option> --}}
                        <option value="1" {{ $profile->role == 1 ? 'selected' : '' }}>Super Admin</option>
                        <option value="2" {{ $profile->role == 2 ? 'selected' : '' }}>Admin</option>
                        <option value="3" {{ $profile->role == 3 ? 'selected' : '' }}>User</option>
                    </select>
                </div>
            </div>

            <div class="col-md-10 remove-pdd">
                <button type="submit" class="pull-right remove-mg">@lang('update')</button>
            </div>
        </form>
    </div>
@stop