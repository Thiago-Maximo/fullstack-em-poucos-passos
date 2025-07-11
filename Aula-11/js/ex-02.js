var verificar_vel = document.getElementById('verificar');
    var txtvel = document.getElementById('txtvel');
    var resultado = document.getElementById('resultado'); // declarada no escopo global

    verificar_vel.addEventListener('click', clicou_verificar_velocidade);

    function clicou_verificar_velocidade() {
        var velocidade = Number(txtvel.value);

        if (velocidade > 60) {
            resultado.innerHTML = `🚨 Você foi <strong>MULTADO</strong>! Seu carro estava a <strong>${velocidade} Km/h</strong>`;
            resultado.style.color = 'red';
        } else {
            resultado.innerHTML = `✅ Velocidade dentro do limite. Dirija com cuidado!`;
            resultado.style.color = 'green';
            }
        }