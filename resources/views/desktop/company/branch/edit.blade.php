@extends('layouts.app')

@section('content')
    <div class="title-content-info">Edit Branch Information</div>
    <div class="row col-md-9 well">
        <form action="{{ url('update-branch/'.$branch->id) }}" method="POST">
            @csrf
            <input id="company_id" type="hidden" name="company_id" value="{{ request()->get('id') }}">
            <div class="form-group row">
                <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $branch->name }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="warehouse_id" class="col-md-4 col-form-label text-md-right">{{ __('Warehouse') }}</label>

                <div class="col-md-6">
                    <select id="warehouse_id" class="form-control @error('warehouse_id') is-invalid @enderror" name="warehouse_id">
                        @foreach($warehouse as $war)
                            <option value="{{ $war->id }}" {{ $branch->name == $war->id ? 'selected' : '' }}>{{ $war->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>

                <div class="col-md-6">
                    <textarea name="location" id="location" class="form-control">{{ $branch->location }}</textarea>
                </div>
            </div>
            
            <div class="col-md-10 remove-pdd">
                <button type="submit" class="remove-mg pull-right">@lang('update')</button>
            </div>
        </form>
    </div>
@stop