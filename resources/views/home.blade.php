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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.6.0/firebase-app.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/6.6.0/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/6.6.0/firebase-firestore.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyC8YUBMf4wZbue3Hy8K1oFAdq67x2JyGDs",
    authDomain: "first-app-e4b1c.firebaseapp.com",
    databaseURL: "https://first-app-e4b1c.firebaseio.com",
    projectId: "first-app-e4b1c",
    storageBucket: "first-app-e4b1c.appspot.com",
    messagingSenderId: "1090500936315",
    appId: "1:1090500936315:web:80b0f6c8ba7f29b61318de"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var uploader = document.getElementById('uploader');
  var fileButton = document.getElementById('fileButton');

  fileButton.addEventListener('change', function(e){
    var file = e.target.files[0];
    var storageRef = firebase.storageRef().ref('images' + file.name);

    var task = storageRef.put(file);
    task.on('state_changed',
        function progress(snapshot){
            var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
            uploader.value = percentage;
        },
        function error(err){

        },
        function complete(){

        }
    );
  });

</script>
@stop