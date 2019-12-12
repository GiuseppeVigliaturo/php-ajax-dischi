// function prova(elemento){
//   var elemento;
// };
function printDischi(dischi){

  //handlebars template
  var target = $('#container');
  var template =$('#song-template').html();
  var compiled = Handlebars.compile(template);

  for(var i = 0; i < dischi.length; i++) {
    var context = compiled(dischi[i]);
    target.append(context);
  }

};

function getData(){

  $.ajax({

    url:'songs.php',
    method:'GET',
    success: function(data){
      console.log(data);


      printDischi(data);

    },
    error:function(error){
      console.log('err',error);
    }
  });
}

function init() {
  getData();
}
$(document).ready(init);
