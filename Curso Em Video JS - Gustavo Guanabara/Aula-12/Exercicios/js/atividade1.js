var hora = new Date();
var horas = hora.getHours();
var minutos = hora.getMinutes();

// Formata para HH:MM
var horaFormatada = horas.toString().padStart(2, '0') + ':' +
                    minutos.toString().padStart(2, '0');

// Exibe no elemento HTML
var texto_novo = document.getElementById('txthora');

var img = document.getElementById("divhora");

if (horas >= 0 && horas < 12) {
  img.style.backgroundImage = "url('img/foto-manha.png')";
  texto_novo.innerHTML = 'Agora são ' + horaFormatada + ' Da Manhã';
} else if (horas >= 12 && horas < 18) {
  img.style.backgroundImage = "url('img/foto-tarde.png')";
  texto_novo.innerHTML = 'Agora são ' + horaFormatada + ' Da Tarde';
} else {
  img.style.backgroundImage = "url('img/foto-noite.png')";
  texto_novo.innerHTML = 'Agora são ' + horaFormatada + ' Da Noite';
}
