<?php 
function trocaJogador(string $jogador): string{
    if ($jogador === ICONE_JOGADOR_1) {
        return $jogador = ICONE_JOGADOR_2;
    } else {
        return $jogador = ICONE_JOGADOR_1;
    };
};

?>