@extends('layouts.app')

@section('content')
    <div class="title-content-info">List of User Login <a href="{{ url('create-profile') }}"><i class="far fa-plus-square pull-right" style="font-size: 25px;"></i></a></div>
    <div class="row col-md-9 well">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Role</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($profile as $index => $pro)
                <tr>
                    <td class="text-center">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                    <td class="text-center">{{ $pro->name }}</td>
                    <td class="text-center">{{ $pro->email }}</td>
                    <td class="text-center">
                        @if($pro->role == 0) <span class="">Root</span>
                        @elseif($pro->role == 1) <span class="">Super Admin</span>
                        @elseif($pro->role == 2) <span class="">Admin</span>
                        @elseif($pro->role == 3) <span class="">User</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ url('edit-profile/'.$pro->id) }}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-profile/'.$pro->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

{{-- @include('desktop.profile._modal-edit-profile') --}}