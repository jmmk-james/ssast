var count=0;
var parar=null;
var n=0;
var id=[];
var item=[];
var ci=[];
var nombre=[];
var paterno=[];
var materno=[];

document.getElementById('botonstart').disabled=true;
document.getElementById('botonstop').disabled=true;
document.getElementById('botoncargar').disabled=false;

function cargar(){
    let tabla=document.getElementById('persona');
    n=tabla.rows.length;
    for (var i = 0; i <tabla.rows.length-1 ; i++){
        id[i]=tabla.rows[i+1].cells[0].innerHTML;
        item[i]=tabla.rows[i+1].cells[1].innerHTML;
        ci[i]=tabla.rows[i+1].cells[2].innerHTML;
        nombre[i]=tabla.rows[i+1].cells[3].innerHTML;
        paterno[i]=tabla.rows[i+1].cells[4].innerHTML;
        materno[i]=tabla.rows[i+1].cells[5].innerHTML;
    }
    document.getElementById('cantidad').textContent=n-2;
    document.getElementById('botonstart').disabled=false;
    document.getElementById('botonstop').disabled=true;
    document.getElementById('botoncargar').disabled=true;

}
function start(){

    udateTime();
    parar = setInterval(udateTime, 50);
    document.getElementById('botonstart').disabled=true;
    document.getElementById('botonstop').disabled=false;
}

function stop() {
    clearInterval(parar);
    document.getElementById('id_persona').value=document.getElementById('rid').textContent;
    document.getElementById('botonstart').disabled=false;
    document.getElementById('botonstop').disabled=true;
}

var udateTime = function() {

    count+=1;
    if (count > n-2){
        count=0
    }
    document.getElementById('rid').textContent =id[count];
    document.getElementById('ritem').textContent =item[count];
    document.getElementById('rci').textContent =ci[count];
    document.getElementById('rnombre').textContent =nombre[count];
    document.getElementById('rpaterno').textContent =paterno[count];
    document.getElementById('rmaterno').textContent =materno[count];

};
 

//udateTime();
 
//setInterval(udateTime, 100);