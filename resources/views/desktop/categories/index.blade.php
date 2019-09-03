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
            @foreach($categories as $index => $categ)
                <tr class="tb-category">
                    <td class="text-left align-middle">
                        <span class="glyphicon glyphicon-plus toggle-tr-category"></span>
                        <span class="glyphicon glyphicon-minus toggle-tr-category" style="display:none"></span>
                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                    </td>
                    <td class="text-center align-middle">{{ $categ->name }}</td>
                    <td class="text-center align-middle">{{ $categ->icon }}</td>
                    <td class="text-center align-middle">{{ $categ->text_color }}</td>
                    <td class="text-center align-middle">{{ $categ->background_color }}</td>
                    <td class="text-center align-middle">{{ $categ->remark }}</td>
                    <td class="text-center align-middle">
                        <a href="{{ url('create-sub-i?id='.$categ->id) }}"><i class="far fa-plus-square"></i></a> |
                        <a href="{{ url('category/'.$categ->id.'/edit') }}"><i class="far fa-edit"></i></a> |
                        <a href="{{ url('delete-category/'.$categ->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>

                @foreach ($categ->sub1_categories as $index => $sub)
                    <tr style="background-color:#ccc; display:none;" class="sub-i-toggle">
                        <td class="text-right align-middle">
                            <span class="glyphicon glyphicon-plus toggle-tr-sub"></span>
                            <span class="glyphicon glyphicon-minus toggle-tr-sub" style="display:none"></span>
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </td>
                        <td class="text-center align-middle">{{ $sub->name }}</td>
                        <td class="text-center align-middle">{{ $sub->icon }}</td>
                        <td class="text-center align-middle">{{ $sub->text_color }}</td>
                        <td class="text-center align-middle">{{ $sub->background_color }}</td>
                        <td class="text-center align-middle">{{ $sub->remark }}</td>
                        <td class="text-center align-middle">
                            <a href="{{ url('create-sub-ii?id='.$sub->cat_id.'&sub='.$sub->id) }}"><i class="far fa-plus-square"></i></a> |
                            <a href="{{ url('edit-sub-i/'.$sub->id.'?id='.$categ->id) }}"><i class="far fa-edit"></i></a> |
                            <a href="{{ url('delete-sub-i/'.$sub->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>

                    @foreach($sub->sub2_categories as $index => $sub2)
                    <tr style="background-color:#ccc; display:none;" class="sub-ii-toggle">
                        <td class="text-right align-middle">
                            {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                        </td>
                        <td class="text-center align-middle">{{ $sub2->name }}</td>
                        <td class="text-center align-middle">{{ $sub2->icon }}</td>
                        <td class="text-center align-middle">{{ $sub2->text_color }}</td>
                        <td class="text-center align-middle">{{ $sub2->background_color }}</td>
                        <td class="text-center align-middle">{{ $sub2->remark }}</td>
                        <td class="text-center align-middle">
                            <a href="{{ url('edit-sub-ii/'.$sub2->id.'?id='.$sub->cat_id.'&sub='.$sub->id) }}"><i class="far fa-edit"></i></a> |
                            <a href="{{ url('delete-sub-ii/'.$sub2->id) }}" class="text-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/desktop/_category.js') }}"></script>
@endsection