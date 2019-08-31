@extends('layouts.app')

@section('content')
    <div class="title-content-info">List of Categories <a href="{{ url('category/create') }}"><i class="far fa-plus-square icon-create pull-right"></i></a></div>
    <div class="row col-md-9 well">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Icon</th>
                    <th class="text-center">Text Color</th>
                    <th class="text-center">Background Color</th>
                    <th class="text-center">Remark</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categoies as $index => $categ)
                <tr>
                    <td class="text-center align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="text-center align-middle">{{ $categ->name }}</td>
                    <td class="text-center align-middle">{{ $categ->icon }}</td>
                    <td class="text-center align-middle">{{ $categ->text_color }}</td>
                    <td class="text-center align-middle">{{ $categ->background_color }}</td>
                    <td class="text-center align-middle">{{ $categ->remark }}</td>
                    <td class="text-center align-middle">
                        <a href="{{ url('edit-category/'.$categ->id) }}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-category/'.$categ->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop