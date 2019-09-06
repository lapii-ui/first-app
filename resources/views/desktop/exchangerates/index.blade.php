@extends('layouts.app')

@section('content')
    <div class="title-content-info">Exchange Rate <a href="{{ url('create-exchange') }}"><i class="far fa-plus-square icon-create pull-right"></i></a></div>
    <div class="row col-md-9 well">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">currency</th>
                    <th class="text-center">amount</th>
                    <th class="text-center">rate</th>
                    <th class="text-center">Default</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($exchange as $index => $exch)
                <tr>
                    <td class="text-center align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="text-center align-middle"></td>
                    <td class="text-center align-middle"></td>
                    <td class="text-center align-middle"></td>
                    <td class="text-center align-middle"></td>
                    <td class="text-center align-middle">
                        <a href="#"><i class="far fa-edit"></i></a> |
                        <a href="#" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop