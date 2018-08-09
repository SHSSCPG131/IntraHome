var config = {
    apiKey: "AIzaSyCukfTz_VLbn148FQFgvxj1eulGMzCgr6g",
    authDomain: "newshss-c303e.firebaseapp.com",
    databaseURL: "https://newshss-c303e.firebaseio.com",
    projectId: "newshss-c303e",
    storageBucket: "newshss-c303e.appspot.com",
    messagingSenderId: "132420302545"
  };
firebase.initializeApp(config);

$(document).ready(function(){
  var database = firebase.database();
  var ledStatus;

  database.ref().on("value", function(snap){
    ledStatus = snap.val().ledStatus;
    if(ledStatus == 1){
      $(".lightStatus").text("The light is on");
    } else {
      $(".lightStatus").text("The light is off");
    }
  });

  $(".lightButton").click(function(){
    var firebaseRef = firebase.database().ref().child("ledStatus");

    if(ledStatus == 1){
      firebaseRef.set(0);
      ledStatus = 0;
    } else {
      firebaseRef.set(1);
      ledStatus = 1;
    }
  });
});
