<?php 
function vencedor($vencedor, array $jogadores): string{
    if ($vencedor === ICONE_JOGADOR_1) {
        return "\n O vencedor foi o {$jogadores[0]}!!! \n";
    } elseif ($vencedor === ICONE_JOGADOR_2) {
        return " \n O vencedor foi o {$jogadores[1]}!!! \n";
    } else {
        return "\n O jogo acabou EMPATADO";
    };
}

?>