@extends('layouts.app')

@section('content')
    {{--  @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div>{{ Auth::user()->name }}- role {{ Auth::user()->role }}</div>  --}}

    <progress value="0" max="100" id="uploader">0%</progress>
    <input type="file" value="upload" id="fileButton">
@endsection

@section('js')
  <script src="{{ asset('js/desktop/_dashboard.js') }}"></script>
@stop