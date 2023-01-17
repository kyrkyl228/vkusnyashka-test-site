$(document).ready ( function(){
    document.getElementById('soda').style.display = 'grid';
    document.getElementById('tea').style.display = 'none';


    document.getElementById('button__soda').style.background = '#F56210';
    document.getElementById('button__soda').style.borderRadius = '3vw';
});

function style(name){
    document.getElementById('button__soda').setAttribute('style', '');
    document.getElementById('button__tea').setAttribute('style', '');


    document.getElementById(name).style.background = '#F56210';
    document.getElementById(name).style.borderRadius = '3vw';

};

function soda(){
    document.getElementById('soda').style.display = 'grid';
    document.getElementById('tea').style.display = 'none';

    style("button__soda");
};

function tea(){
    document.getElementById('soda').style.display = 'none';
    document.getElementById('tea').style.display = 'grid';

    style("button__tea");
};