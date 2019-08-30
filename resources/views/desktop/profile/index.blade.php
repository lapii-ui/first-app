@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($profile as $index => $pro)
            <tr>
                <td>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                <td>{{ $pro->name }}</td>
                <td>{{ $pro->email }}</td>
                <td>
                    @if($pro->role == 1) <span class="">Root</span>
                    @elseif($pro->role == 2) <span class="">Super Admin</span>
                    @elseif($pro->role == 3) <span class="">Admin</span>
                    @elseif($pro->role == 4) <span class="">User</span>
                    @endif
                </td>
                <td class="text-right">
                    <a href="#">Edit</a> ||
                    <a href="#" class="text-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
