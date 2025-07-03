// ############### Selecionando Objetos ################
// Por Marca:
// document.getElementsByTagName();

//#####################

//Por ID:
// document.getElementsById();

//#####################

//Por Nome:
// document.getElementsByName();

//#####################

//Por Classe:
// document.getElementsByClassName();

//#####################

//Por Seletor:
//

//#####################

var p = document.getElementsByTagName('p')[0];
document.writeln(`${p.innerText}: Escrito assim em <br>`); //Escreve na Tela, o InnerText: puxar o texto dentro da tag p

document.writeln(`${p.innerHTML}: Com o Resultado em Negrito <br>`); //Puxa todo o conteudo html, até o strong de dentro da tag p

var div_caixa = document.getElementById('caixa');

div_caixa.style.background = 'green';

var caixa = document.querySelector('div#caixa');
caixa.style.background = '';