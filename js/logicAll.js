function info(id){
    document.getElementById('textInformation' + id).style.display = 'block';
    document.getElementById('buy__product' + id).style.display = 'none';
    document.getElementById('information' + id).setAttribute('onclick', 'buy(`'+ id +'`)');
};

function buy(id){
    document.getElementById('textInformation' + id).style.display = 'none';
    document.getElementById('buy__product' + id).style.display = 'block';
    document.getElementById('information' + id).setAttribute('onclick', 'info(`'+ id +'`)');
};