document.addEventListener('DOMContentLoaded', function() {
    // Função para iniciar a Fase 2
    function iniciarFase1() {
        // Navega para o layout da Fase 2
        runtime.goToLayout(runtime.layouts.fase1);
    }

    // Adiciona um evento de clique ao texto "INICIAR"
    document.getElementById('iniciar').addEventListener('click', iniciarFase1);
});
