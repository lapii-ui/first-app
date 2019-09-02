@extends('layouts.app')

@section('content')
<div class="title-content-info">List of Group Table <a href="{{ url('create-grouptable') }}"><i class="far fa-plus-square icon-create pull-right"></i></a></div>
    <div class="row col-md-9 well">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Type</th>
                    <th class="text-center">Remark</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($group_table as $index => $tab)
                <tr>
                    <td class="text-center align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="text-center align-middle">{{ $tab->name }}</td>
                    <td class="text-center align-middle">{{ $tab->type }}</td>
                    <td class="text-center align-middle">{{ $tab->remark }}</td>
                    <td class="text-center align-middle">
                        <a href="{{ url('edit-grouptable/'.$tab->id) }}"><i class="far fa-edit"></i></a> |
                        <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop