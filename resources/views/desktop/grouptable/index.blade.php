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
                    <th class="text-center">Status</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($group_table as $index => $grouptable)
                <tr>
                    <td class="text-center align-middle">
                        <span class="glyphicon glyphicon-plus toggle-tr"></span>
                        <span class="glyphicon glyphicon-minus toggle-tr" style="display:none"></span>
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </td>
                    <td class="text-center align-middle">{{ $grouptable->name }}</td>
                    <td class="text-center align-middle">{{ $grouptable->type }}</td>
                    <td class="text-center align-middle">{{ $grouptable->remark }}</td>
                    <td class="text-center align-middle">
                        {{ $grouptable->status == 1 ? 'Active' : 'Inactive' }}</td>
                    <td class="text-center align-middle">
                        <a href="{{ url('create-subtable?id='.$grouptable->id) }}"><i class="far fa-plus-square"></i></a> |  
                        <a href="{{ url('edit-grouptable/'.$grouptable->id) }}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-grouptable/'.$grouptable->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>

                @foreach ($grouptable->sub_table as $index => $subtable)
                    <tr style="background-color:#ccc;">
                        <td class="text-right align-middle">
                            <span class="glyphicon glyphicon-plus toggle-tr"></span>
                            <span class="glyphicon glyphicon-minus toggle-tr" style="display:none"></span>
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </td>
                        <td class="text-center align-middle">{{ $subtable->name }}</td>
                        <td class="text-center align-middle">{{ $subtable->status }}</td>
                        <td class="text-center align-middle">{{ $subtable->remark }}</td>
                        <td class="text-center align-middle">
                            <a href="{{ url('edit-subtable/'.$subtable->id.'?id='.$grouptable->id) }}"><i class="far fa-edit"></i></a> |
                            <a href="{{ url('delete-subtable/'.$subtable->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/desktop/_table.js') }}"></script>
@endsection