document.addEventListener('DOMContentLoaded', () => {
    const btnMenu = document.querySelector('.botao_menu');;
    const listaMenu = document.getElementById('lista_menu');

    if (btnMenu && listaMenu) {
        btnMenu.addEventListener('click', (event) => {
            event.stopPropagation();
            listaMenu.classList.toggle('ativo');
        });

        document.addEventListener('click', () => {
            listaMenu.classList.remove('ativo');
        });
    }

    const radioArtista = document.getElementById('radio_artista');
    const radioVisitante = document.getElementById('radio_visitante');
    const campoCodigoConvite = document.getElementById('campo_codigo_convite');

    if (radioArtista && radioVisitante && campoCodigoConvite) {
        function alternarCampoConvite() {
            if (radioArtista.checked) {
                campoCodigoConvite.style.display = 'flex';
            } else {
                campoCodigoConvite.style.display = 'none';
            }
        }

        // Eventos para verificar a mudança do radio button
        radioArtista.addEventListener('change', alternarCampoConvite);
        radioVisitante.addEventListener('change', alternarCampoConvite);

        // Executa uma vez no carregamento para garantir o estado inicial
        alternarCampoConvite();
    }
});