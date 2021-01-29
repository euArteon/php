/*
var query = location.search.slice(1);
var partes = query.split('&');
var data = {};
partes.forEach(function (parte) {
    var chaveValor = parte.split('=');
    var chave = chaveValor[0];
    var valor = chaveValor[1];
    data[chave] = valor;
});

quantity = document.querySelector('#insert');
quantity.innerHTML = data.lang;
console.log(data); // Object {lang: "pt", page: "home"}
*/
(function readyJS(win,doc){
    'use strict';
    
    let btn = document.querySelector('#btnDb');

    function showDb(teste){
        let ajax = new XMLHttpRequest;
        ajax.open('GET','http://localhost/Checkout/checkout/lib/php/get_cart.php');
        ajax.onload = function(){
            if(ajax.status === 200 && ajax.readyState === 4){
               // console.log(JSON.parse(ajax.responseText));
                let jsonResponse = JSON.parse(ajax.responseText);
                for(let i=0; i<jsonResponse.length; i++){
                    if (jsonResponse[i].id == "100"){
                        let product = jsonResponse[i];
                        document.querySelector('#insert').innerHTML = product.price;
                        
                        console.log(jsonResponse[i]);
                    }
                }
                /* document.querySelector('#insert').innerHTML = jsonResponse[0].black_img; */
            }else {
                console.log('Houve um erro de requisição. Verifique o status ou state da requisição');
            }
        }
        ajax.send();
    }
    btn.addEventListener('click',showDb,false);























})(window,document);


