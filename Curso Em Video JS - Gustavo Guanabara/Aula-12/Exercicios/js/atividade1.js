var hora = new Date();
  var horas = hora.getHours();
  var minutos = hora.getMinutes();

  // Formata para HH:MM
  var horaFormatada = horas.toString().padStart(2, '0') + ':' +
                      minutos.toString().padStart(2, '0');

  // Exibe no elemento HTML
  var texto_novo = document.getElementById('txthora');
  texto_novo.innerHTML = 'Agora são ' + horaFormatada;

  if (hora > 15){
    
  }