@extends('layouts.app')
    @section('content')
<div class="title-content-info">List of Price List<a href="{{ url('create-pricelist') }}">
        <i class="far fa-plus-square icon-create pull-right"></i></a></div>
        <div class="row col-md-9 well">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Currency</th>
                        <th class="text-center">Name</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($price_lists as $index => $pricelist)
                    <tr>
                        <td class="text-center align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                        <td class="text-center align-middle">{{ $pricelist->currencies->name }}</td>
                        <td class="text-center align-middle">{{ $pricelist->name }}</td>
                        <td class="text-center align-middle"> 
                        <a href="{{ url('edit-pricelist/'.$pricelist->id) }}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-pricelist/'.$pricelist->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@stop