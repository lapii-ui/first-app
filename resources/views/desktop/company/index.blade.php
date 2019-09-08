@extends('layouts.app')

@section('content')
    <div class="title-content-info">List of Company <a href="{{ url('company/create') }}"><i class="far fa-plus-square icon-create pull-right"></i></a></div>
    <div class="row col-md-9 well">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Currency</th>
                    <th class="text-center">Default</th>
                    <th class="text-center">Address</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($company as $index => $com)
                <tr class="company-toggle">
                    <td class="text-center align-middle">
                        <span class="glyphicon glyphicon-plus toggle-tr-company"></span>
                        <span class="glyphicon glyphicon-minus toggle-tr-company" style="display:none"></span>
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </td>
                    <td class="text-center align-middle">{{ $com->name }}</td>
                    <td class="text-center align-middle">{{ $com->email }}</td>
                    <td class="text-center align-middle">{{ $com->currency_id }}</td>
                    <td class="text-center align-middle">{{ $com->default == 1 ? 'Default' : 'Not Default' }}</td>
                    <td class="text-center align-middle">{{ $com->address }}</td>
                    <td class="text-center align-middle">
                        <a href="{{ url('create-branch?id='.$com->id) }}"><i class="far fa-plus-square"></i></a> |
                        <a href="{{ url('company/'.$com->id.'/edit') }}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-company/'.$com->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>

                @foreach ($com->branches as $index => $branch)
                    <tr class="branch-toggle" style="display:none; background-color:#ccc;">
                        <td class="text-right align-middle">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </td>
                        <td class="text-center align-middle">{{ $branch->name }}</td>
                        <td class="text-center align-middle" colspan="2">{{ $branch->warehouse_id }}</td>
                        <td class="text-center align-middle" colspan="2">{{ $branch->location }}</td>
                        <td class="text-center align-middle">
                            <a href="{{ url('edit-branch/'.$branch->id.'?id='.$com->id) }}"><i class="far fa-edit"></i></a> |
                            <a href="{{ url('delete-branch/'.$branch->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/desktop/_category.js') }}"></script>
@endsection