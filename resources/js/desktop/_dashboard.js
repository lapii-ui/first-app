import firebase from 'firebase/app'
import 'firebase/storage'

if (!firebase.apps.length) {
  firebase.initializeApp(
    {
        apiKey: "AIzaSyC8YUBMf4wZbue3Hy8K1oFAdq67x2JyGDs",
        authDomain: "first-app-e4b1c.firebaseapp.com",
        databaseURL: "https://first-app-e4b1c.firebaseio.com",
        projectId: "first-app-e4b1c",
        storageBucket: "first-app-e4b1c.appspot.com",
        messagingSenderId: "1090500936315",
        appId: "1:1090500936315:web:80b0f6c8ba7f29b61318de"
    }
  )
}


class Dashboard {
    constructor() {

        // var uploader = document.getElementById('uploader');
        // var fileButton = document.getElementById('fileButton');

        // fileButton.addEventListener('change', function(e){
        //     var file = e.target.files[0];
            
        //     var storageRef = firebase.storage().ref('images/img_' + file.name);

        //     var task = storageRef.put(file);

        //     task.on('state_changed',
        //         function progress(snapshot){
        //             var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
        //             uploader.value = percentage;
        //         },
        //         function error(err){

        //         },
        //         function complete(){
        //             task.snapshot.ref.getDownloadURL().then(function(downloadURL) {
        //                 console.log('Fuck u bitch at=>', downloadURL);
        //               });
        //         }
        //     );
        // });

        $('#img-upload-temp').on('change', function(){
            
            let formData = new FormData();
            formData.append('file', $(this)[0].files[0]);
            // let _file = e.target.files[0];
            console.log($(this)[0].files[0]);

            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: '/upload-image',
                type: 'POST',
                dataType: 'json',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    // if ( data.success == true) {
                    //     $('#Path').val(data.url);
                    //     $('._filename').val(data.filename);
                        $('.resp_img').html('<div class="thumbnail" style="width: 100px; height: 65px"><img src="'+ data.url +'" class="portrait"/></div>');
                    // }
                    // else {
                    //     alertify.error(data.message);
                    // }
                }
            });
        });
    }
}

const dashboard = new Dashboard();