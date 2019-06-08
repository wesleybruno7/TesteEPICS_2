var addFilter = document.getElementById('add-filter');
var search = document.getElementById('search');

var btn0 = document.getElementById('btn0');
var btn1 = document.getElementById('btn1');
var btn2 = document.getElementById('btn2');
var btn3 = document.getElementById('btn3');
var btn4 = document.getElementById('btn4');
var btn5 = document.getElementById('btn5');

var pagAfter = document.getElementById('pag-after');
var pag1 = document.getElementById('pag1');
var pag2 = document.getElementById('pag2');
var pag3 = document.getElementById('pag3');
var pagBefore = document.getElementById('pag-before');

addFilter.addEventListener('click', justAlert);
search.addEventListener('click', justAlert);

// adicionar eventListener

btn0.addEventListener('click', justAlert);
btn1.addEventListener('click', justAlert);
btn2.addEventListener('click', justAlert);
btn3.addEventListener('click', justAlert);
btn4.addEventListener('click', justAlert);
btn5.addEventListener('click', justAlert); 

pagAfter.addEventListener('click', justAlert); 
pag1.addEventListener('click', justAlert); 
pag2.addEventListener('click', justAlert); 
pag3.addEventListener('click', justAlert); 
pagBefore.addEventListener('click', justAlert); 

//função para exibir o alert
                  
function justAlert(e){
    e.preventDefault();
    alert("Não programei esta função");
}