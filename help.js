$.ajax({
    url: 'help.php',
    type: 'GET',
    success: function(data){
        alert(data);
      }
});