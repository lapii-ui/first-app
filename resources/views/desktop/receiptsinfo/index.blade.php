@extends('layouts.app')
    @section('content')
    <div class="title-content-info">List of Receipt Information <a href="{{ url('create-receipt') }}">
        <i class="far fa-plus-square icon-create pull-right"></i></a></div>
        <div class="row col-md-9 well">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Title</th>
                        <th class="text-center">Brand name</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Phone</th>
                        <th class="text-center">Remark</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($receipts as $index => $receipt)
                    <tr>
                        <td class="text-center align-middle">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                        <td class="text-center align-middle">{{ $receipt->title }}</td>
                        <td class="text-center align-middle">{{ $receipt->branch_name }}</td>
                        <td class="text-center align-middle">{{ $receipt->address }}</td>
                        <td class="text-center align-middle">{{ $receipt->tel1 }}</td>
                        <td class="text-center align-middle">{{ $receipt->note_kh }}</td>
                        <td class="text-center align-middle"> 
                            <a href="{{ url('edit-receipt/'.$receipt->id)}}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-receipt/'.$receipt->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@stop