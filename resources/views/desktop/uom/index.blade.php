@extends('layouts.app')

@section('content')
    <h2>Hello</h2>
    <div class="title-content-info">Unit Of Measure <a href="{{ url('uom/create') }}"><i class="far fa-plus-square icon-create pull-right"></i></a></div>
    <div class="row col-md-9 well">
        <div class="switchToggle pull-right">
            <input type="checkbox" id="switch">
            <label for="switch">Toggle</label>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Code</th>
                    <th class="text-center">Name</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody class="tb-uom">
                @foreach($uom as $index => $uom)
                <tr>
                    <td class="text-center align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="text-center align-middle">{{ $uom->code }}</td>
                    <td class="text-center align-middle">{{ $uom->name }}</td>
                    <td class="text-right align-middle">
                        <a href="{{ url('edit-uom/'.$uom->id) }}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-uom/'.$uom->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tbody class="tb-group-uom" style="display:none;">
                @foreach($group_uom as $index => $guom)
                <tr>
                    <td class="text-center align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="text-center align-middle">{{ $guom->code }}</td>
                    <td class="text-center align-middle">{{ $guom->name }}</td>
                    <td class="text-right align-middle">
                        <a href="{{ url('define-uom/'.$guom->id) }}">Define</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/desktop/_uom.js') }}"></script>
@stop