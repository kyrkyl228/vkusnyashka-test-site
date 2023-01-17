let total = 0;

let txtLoop = [];
for(let i=0; i<localStorage.length; i++) {
  let a = [localStorage.key(i), localStorage.getItem(localStorage.key(i))];
  txtLoop[i] = a
}

const txt = JSON.stringify(txtLoop);



$.ajax({
  url: '../PHP/basketInfo.php',
  type: 'POST',
  data: 'txt='+ txt,
  success: function(data){
    $('#purchases').html(data);
    

    for(var i = 0; i < localStorage.length; i++){
      $("#mainWrapper__mainValue" + localStorage.key(i)).html(localStorage.getItem(localStorage.key(i)));
    };
  },
  error: function(){
    console.log('ERROR');
  }
})

$.ajax({
  url: '../PHP/basketTotal.php',
  type: 'POST',
  data: 'txt='+ txt,
  success: function(data){
    $('#totalPrice__inner').html(data);

    total = data; 
  },
  error: function(){
    console.log('ERROR');
  }
})
