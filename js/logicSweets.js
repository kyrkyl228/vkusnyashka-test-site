$(document).ready ( function(){
    document.getElementById('caramel').style.display = 'grid';
    document.getElementById('chocolateBar').style.display = 'none';
    document.getElementById('chocolate').style.display = 'none';
    document.getElementById('halva').style.display = 'none';

    document.getElementById('button__caramel').style.background = '#F56210';
    document.getElementById('button__caramel').style.borderRadius = '3vw';
});

function style(name){
    document.getElementById('button__caramel').setAttribute('style', '');
    document.getElementById('button__chocolateBar').setAttribute('style', '');
    document.getElementById('button__chocolate').setAttribute('style', '');
    document.getElementById('button__halva').setAttribute('style', '');


    document.getElementById(name).style.background = '#F56210';
    document.getElementById(name).style.borderRadius = '3vw';

};

function caramel(){
    document.getElementById('caramel').style.display = 'grid';
    document.getElementById('chocolateBar').style.display = 'none';
    document.getElementById('chocolate').style.display = 'none';
    document.getElementById('halva').style.display = 'none';

    style("button__caramel");
};

function chocolateBar(){
    document.getElementById('caramel').style.display = 'none';
    document.getElementById('chocolateBar').style.display = 'grid';
    document.getElementById('chocolate').style.display = 'none';
    document.getElementById('halva').style.display = 'none';

    style("button__chocolateBar");
};

function chocolate(){
    document.getElementById('caramel').style.display = 'none';
    document.getElementById('chocolateBar').style.display = 'none';
    document.getElementById('chocolate').style.display = 'grid';
    document.getElementById('halva').style.display = 'none';

    style("button__chocolate");
};

function halva(){
    document.getElementById('caramel').style.display = 'none';
    document.getElementById('chocolateBar').style.display = 'none';
    document.getElementById('chocolate').style.display = 'none';
    document.getElementById('halva').style.display = 'grid';

    style("button__halva");
};

