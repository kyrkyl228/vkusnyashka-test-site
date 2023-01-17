console.log("Готово");

$(document).on('click', '#paymentButton', function(){
    var txt = 'Hello';
    $.ajax({
      url: '../PHP/basketInfo.php',
      type: 'POST',
      data: 'txt='+ txt,
      success: function(data){
        $('#purchases').text(data);
        alert(data);

     },
      error: function(){
        console.log('ERROR');
      }
   })
})

// $( document ).ready(function() {
//   console.log( "ready!" );
//   let txt = 'kjfghfdgkjghjkldfhgdjkf';
//     $.ajax({
//       url: '../PHP/basketInfo.php',
//       type: 'POST',
//       data: txt,
//       success: function(data){
//         $('#purchases').text(data);
//       alert(data);

//      },
//       error: function(){
//         console.log('ERROR');
//       }
//    })
// });