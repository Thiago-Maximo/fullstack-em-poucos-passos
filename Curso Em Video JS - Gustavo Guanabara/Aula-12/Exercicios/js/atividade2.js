var Botao_Idade = document.getElementById('VrfIdade');
var texto_novo = document.getElementById('txtIdade');
var sexo = document.getElementsByName('sexo');
var img = document.getElementById('DivImg');

Botao_Idade.addEventListener('click', clicou);

function clicou() {
    Botao_Idade.style.backgroundColor = 'green';

    var inputIdade = document.getElementById('InpIdade');
    var anoNascimento = inputIdade.value;
    var anoAtual = new Date().getFullYear();

    if (anoNascimento === "" || isNaN(Number(anoNascimento))) {
        texto_novo.innerHTML = "⚠️ Por favor, digite um ano de nascimento válido.";
        texto_novo.style.color = "red";
        return;
    }

    var  idade = anoAtual - Number(anoNascimento);

    // Verifica se idade é impossível
    if (idade < 0 || idade > 120) {
        texto_novo.innerHTML = "⚠️ Idade inválida. Verifique o ano de nascimento.";
        texto_novo.style.color = "red";
        return;
    }

    var  sexoSelecionado = "";
    if (sexo[0].checked) {
        sexoSelecionado = "Masculino";
    } else if (sexo[1].checked) {
        sexoSelecionado = "Feminino";
    } else {
        texto_novo.innerHTML = "⚠️ Por favor, selecione um sexo.";
        texto_novo.style.color = "red";
        return;
    }

    texto_novo.style.color = "black";
    texto_novo.innerHTML = `Você tem ${idade} anos. E é do sexo ${sexoSelecionado}.`;

    //  Verifica a faixa etária
    var faixa = "";

    if (idade >= 0 && idade <= 6) {
        faixa = "bebe";
        texto_novo.style.color = "black";
        texto_novo.innerHTML = `Você é um Recém Nascido. E é do sexo ${sexoSelecionado}.`;
    } else if (idade > 6 && idade <= 10) {
        faixa = "crianca";
    } else if (idade > 10 && idade < 16) {
        faixa = "pre-adolescente";
    } else if (idade >= 16 && idade < 18) {
        faixa = "adolescente";
    } else if (idade >= 18 && idade < 59){
        faixa = "adulto";
    }else{
        faixa = "idoso"
    }

    // Determina o nome do arquivo da imagem
    var genero = sexoSelecionado == "Masculino" ? "homem" : "mulher";
    if (faixa === "bebe") {
        genero = sexoSelecionado == "Masculino" ? "homem" : "mulher"; // conforme seus nomes de arquivo
    }
    if (faixa === "Adulto") {
        genero = sexoSelecionado == "Masculino" ? "homem" : "mulher"; // conforme seus nomes de arquivo
    }
    if (faixa === "crianca") {
        genero = sexoSelecionado == "Masculino" ? "homem" : "mulher"; // conforme seus nomes de arquivo
    }
    if (faixa === "idoso") {
        genero = sexoSelecionado == "Masculino" ? "homem" : "mulher";
    }

    var imagemPath = `img/${faixa}-${genero}-atividade2.png`;
    img.style.backgroundImage = `url('${imagemPath}')`;
}

