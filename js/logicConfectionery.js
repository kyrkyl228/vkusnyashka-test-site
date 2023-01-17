$(document).ready ( function(){
    document.getElementById('waf').style.display = 'grid';
    document.getElementById('cookie').style.display = 'none';


    document.getElementById('button__waf').style.background = '#F56210';
    document.getElementById('button__waf').style.borderRadius = '3vw';
});

function style(name){
    document.getElementById('button__waf').setAttribute('style', '');
    document.getElementById('button__cookie').setAttribute('style', '');


    document.getElementById(name).style.background = '#F56210';
    document.getElementById(name).style.borderRadius = '3vw';

};

function waf(){
    document.getElementById('waf').style.display = 'grid';
    document.getElementById('cookie').style.display = 'none';

    style("button__waf");
};

function cookies(){
    document.getElementById('waf').style.display = 'none';
    document.getElementById('cookie').style.display = 'grid';

    style("button__cookie");
};