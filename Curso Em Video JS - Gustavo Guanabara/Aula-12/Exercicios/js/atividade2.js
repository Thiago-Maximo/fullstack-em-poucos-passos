var Botao_Idade = document.getElementById('VrfIdade');
var texto_novo = document.getElementById('txtIdade');
var sexo = document.getElementsByName('sexo'); // Isso retorna uma NodeList
var img = document.getElementById('DivImg');

Botao_Idade.addEventListener('click', clicou); //escutando o click do botão do form

function clicou() { //função de click
    Botao_Idade.style.backgroundColor = 'green';

    var inputIdade = document.getElementById('InpIdade');
    var anoNascimento = inputIdade.value;

    // Verifica se ano está vazio ou inválido
    if (anoNascimento === "" || isNaN(Number(anoNascimento))) {
        texto_novo.innerHTML = "⚠️ Por favor, digite um ano de nascimento válido.";
        texto_novo.style.color = "red";
        return;
    }

    // Verifica se um sexo foi selecionado
    let sexoSelecionado = "";
    if (sexo[0].checked) {
        sexoSelecionado = "Masculino";
    } else if (sexo[1].checked) {
        sexoSelecionado = "Feminino";
    } else {
        texto_novo.innerHTML = "⚠️ Por favor, selecione um sexo.";
        texto_novo.style.color = "red";
        return;
    }

    var anoAtual = new Date().getFullYear();
    var idade = anoAtual - Number(anoNascimento);

    texto_novo.style.color = "black"; // Resetar a cor
    texto_novo.innerHTML = `Você tem ${idade} anos. E é do sexo ${sexoSelecionado}.`;

    var faixa = "";

    if (idade >= 1 && idade <= 10) {
        faixa = "crianca";
    } else if (idade > 10 && idade <= 16) {
        faixa = "pre-adolescente";
    } else if (idade > 16 && idade < 18) {
        faixa = "adolescente";
    } else if (idade >= 18 && idade <= 59) {
        faixa = "adulto";
    } else {
        faixa = "idoso";
    }

    // Define prefixo com base no sexo
    var genero = sexoSelecionado == "Masculino" ? "homem" : "mulher";

    // Ajustes para nomes de arquivos
    if (faixa === "crianca") {
        genero = sexoSelecionado == "Masculino" ? "homem" : "mulher"; 
    }
    if (faixa === "idoso") {
        genero = sexoSelecionado == "Masculino" ? "homem" : "mulher";
    }

    // Monta o caminho da imagem
    let imagemPath = `img/${faixa}-${genero}-atividade2.png`;

    // Aplica a imagem
    img.style.backgroundImage = `url('${imagemPath}')`;
}
