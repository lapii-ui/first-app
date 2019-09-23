@extends('layouts.app')

@section('content')
<div class="title-content-info">Business Partner <a href="{{ url('create-businesspartner') }}"><i class="far fa-plus-square icon-create pull-right"></i></a></div>
    <div class="row col-md-9 well">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Code</th>
                    <th class="text-center">Price List</th>
                    <th class="text-center">Partner Name</th>
                    <th class="text-center">Partner Type</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Location</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($businesspartners as $index => $businesspartner)
                <tr>
                    <td class="text-center align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="text-center align-middle">{{ $businesspartner->code }}</td>
                    <td class="text-center align-middle">{{ $businesspartner->price_lists->name }}</td>
                    <td class="text-center align-middle">{{ $businesspartner->name }}</td>
                    <td class="text-center align-middle">{{ $businesspartner->type== 1 ? 'General Vender' : 'General Customer' }}</td>
                    <td class="text-center align-middle">{{ $businesspartner->phone }}</td>
                    <td class="text-center align-middle">{{ $businesspartner->location }}</td>
                    <td class="text-center align-middle">
                    <a href="{{ url('edit-businesspartner/'.$businesspartner->id) }}"><i class="far fa-edit"></i></a> |
                    <a href="{{ url('delete-businesspartner/'.$businesspartner->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop