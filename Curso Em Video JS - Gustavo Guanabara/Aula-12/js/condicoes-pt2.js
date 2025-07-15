//############################################################################


var idade = 19

if (idade > 18){
    console.log("Maior de Idade E Vota")
}else{
    console.log("Menor de Idade")
    if (idade >= 16 && idade <= 18){
        console.log(" Você tem direito ao Voto")
    }else{
        console.log("Você não tem direito a vota")
    }
   
}




//############################################################################


/// Verficação da hora

var hora = 3

if(hora <= 12 && hora >= 6){
   console.log("Bom Dia")

    
}else if(hora >= 13 && hora < 18){
    console.log("Boa Tarde")
}else{
    console.log("Boa Madrugada")
}



//############################################################################










/// Verficação da hora Conforme a hora do computador
var agora = new Date()
var hora = agora.getHours()

if(hora <= 12 && hora >= 6){
    console.log("Bom Dia")

    
}else if(hora >= 13 && hora < 18){
    console.log("Boa Tarde")
}else{
    console.log("Boa Madrugada")
}

//############################################################################

