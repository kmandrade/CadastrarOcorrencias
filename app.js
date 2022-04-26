


/*--------------MENU HAMBURGUER---------------*/

//primeiro recebi a classe do icone onde a pessoa vai clicar
//depois recuperei o menu em outra variavel onde vai realizar a troca da classe
//fiz a funcao para receber a escuta do click um evento click
// que vai receber como função a mudança de estado do menu que eu recuperei
var iconMenu =document.querySelector('.icon-menu');
var recupera_menu = document.querySelector('.menu-side');
var content = document.querySelector('.content');
let body = document.querySelector('.lista_body');
iconMenu.addEventListener('click', function(){
    recupera_menu.classList.toggle('menu-side-move');
    content.classList.toggle('content-move');
    body.classList.toggle('__move')
});

//console.log(body);


/*--------------MENU HAMBURGUER---------------*/

/* Recolhimento do Menu clicalndo no content*/
var content = document.querySelector('.content');

content.addEventListener('click',function(){
    recupera_menu.classList.remove('.menu-side-move');
})




/*--------------MENU LATERAL---------------*/
/*outra forma de fazer esse menu lateral 
const elements = document.querySelectorAll('.link-nav-arrow');
elements.forEach(item => {
  item.addEventListener('click', function() {
    item.nextElementSibling.classList.toggle('hide');
    item.classList.toggle('arrow');
  });
});
AQUI COLOCA A CLASSE HIDE DIPLAY NONE NOS LISTA NAV SECOND
*/
$('.link-nav-ordem').click(function(){
  $('.menu-side ul .list-nav-ordem').toggleClass('mostra');
  $('.link-nav-ordem').toggleClass('move');
});

$('.link-nav-cliente').click(function(){
  $('.menu-side ul .list-nav-cliente').toggleClass('mostra');
  $('.link-nav-cliente').toggleClass('move');
});
$('.icon-menu').click(function(){
  $('.icon-menu .firstLine').toggleClass('firstLine-move');
  $('.icon-menu .secondLine').toggleClass('secondLine-move');
  $('.icon-menu .thirdLine').toggleClass('thirdLine-move');
});
$('.lista_body').click(function(){
  
  
});



/*explicacao da rotacao dos icones:
Aqui eu peguei o link onde a pessoa clica depois eu,
peguei a classe que vai ser trocada por outra classe
nesse caso a classe que vai ser trocada é a mesma que a pessoa clica
que é onde esta o icone se ele vai mudar ou nao
primeiro eu foi no css e coloquei o default a posição original para o lado
depois eu fiz outra classe que ele iria mudar de lado a classe move

FIZ TAMBÉM A MOVIMENTAÇÃO DO MENU HAMBURGUER COLOQUEI ELES NO CSS MOVE PARA MUDAR DE ESTADO
PRIMEIRO ELES JA POSSUI UM CSS DEFINIDO ORIGINAL UMA POSICAO ORIGINAL
SO FIZ FAZER A SEGUNDA POSICAO E MUDAR O ESTADO DELA

*/

/*$('.link-icon-header').click(function(){
  $('.menu-side .nav-menu').toggleClass('mostra');
});
*/
/*--------------MOVIMENTACAO MENU LATERAL CLICANDO NO CONTENT ---------------*/


