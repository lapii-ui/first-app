@extends('layouts.app')

@section('content')
    {{--  <progress value="0" max="100" id="uploader">0%</progress>
    <input type="file" value="upload" id="fileButton">  --}}

    <div class="resp_img"></div>
    <input type="file" id="img-upload-temp">
@endsection

@section('js')
  <script src="{{ asset('js/desktop/_dashboard.js') }}"></script>
@stop