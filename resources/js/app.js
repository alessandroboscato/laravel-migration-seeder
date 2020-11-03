require('./bootstrap');
const $ = require("jquery");
const Handlebars = require("handlebars");

$(function(){
  $.ajax({
    "url": "http://localhost:8000/api/comics",
    "method": "GET",
    "success": function(data){
      renderComics(data);
    },
    "error": function(err){
      alert("Errore");
    }
  });
});

function renderComics(data){
  var source = document.getElementById("entry-template").innerHTML;
  var template = Handlebars.compile(source);

  for(var i = 0; i< data.length; i++){
    var comic = data[i];
    var html = template(comic);
    $("#comics").append(html);

  }

}
