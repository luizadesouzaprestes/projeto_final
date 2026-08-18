document.addEventListener('DOMContentLoaded', () => {
    const btnMenu = document.querySelector('.botao_menu');;
    const listaMenu = document.getElementById('lista_menu');

    if (btnMenu && listaMenu) {
        // Ao clicar no botão, liga/desliga a classe 'ativo'
        btnMenu.addEventListener('click', (event) => {
            event.stopPropagation(); // Evita que o clique feche o menu imediatamente
            listaMenu.classList.toggle('ativo');
        });

        // Se clicar em qualquer parte da tela, fecha o menu
        document.addEventListener('click', () => {
            listaMenu.classList.remove('ativo');
        });
    }
});