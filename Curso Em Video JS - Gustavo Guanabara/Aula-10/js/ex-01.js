// Eventos

//################## Eventos de Mouse (São Apenas alguns eventos) ##################

//mouseenter()
//mousemove()
//moseout()
//mousedown()
//mouseup()


//###################### Função ###################
// function nome(parametro){
    // codigo aqui dentro
//}


//########## 1° Método #################
function clicar(){
    var cor = document.getElementById('area');
    cor.innerText = 'Clicou';
    cor.style.backgroundColor = 'red';
}
function entrar(){
    var texto = document.getElementById('area');
    texto.innerText = 'Entrou';
}
function saiu(){
    var texto = document.getElementById('area');
    texto.innerText = 'Saiu'
}

//############## 2° Método ######################
    var metodo2 = document.getElementById('metodo2');
    metodo2.addEventListener('click', clicou);
    metodo2.addEventListener('mouseenter', entrou);
    metodo2.addEventListener('mouseout', sair);

function clicou(){
    metodo2.style.backgroundColor = 'red';
    metodo2.innerText = 'Clicou!';
}

function entrou(){
    metodo2.innerText = 'Entrou!';
}

function sair(){
    metodo2.innerText = 'Saiu!';
}