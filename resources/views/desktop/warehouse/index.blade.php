@extends('layouts.app')

@section('content')
    <div class="title-content-info">List of Warehouse <a href="{{ url('create-warehouse') }}"><i class="far fa-plus-square icon-create pull-right"></i></a></div>
    <div class="row col-md-9 well">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Location</th>
                    <th class="text-center">Stock In</th>
                    <th class="text-center">Is Default</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($warehouse as $index => $ware)
                <tr>
                    <td class="text-center">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center"></td>
                    <td class="text-center">
                        <a href="{{ url('edit-warehouse/') }}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-warehouse/') }}" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop