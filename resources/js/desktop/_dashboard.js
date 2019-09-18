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

        var uploader = document.getElementById('uploader');
        var fileButton = document.getElementById('fileButton');

        fileButton.addEventListener('change', function(e){
            var file = e.target.files[0];
            
            var storageRef = firebase.storage().ref('images' + file.name);

            var task = storageRef.put(file);

            task.on('state_changed',
                function progress(snapshot){
                    var percentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                    uploader.value = percentage;
                },
                function error(err){

                },
                function complete(){
                    task.snapshot.ref.getDownloadURL().then(function(downloadURL) {
                        console.log('Fuck u bitch at=>', downloadURL);
                      });
                }
            );
        });
    }
}

const dashboard = new Dashboard();