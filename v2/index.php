<?php
require_once __DIR__ . '/study/constantes.php';
require_once __DIR__ . '/study/variaveis.php';
require_once __DIR__ . '/study/getNomeJogadores.php';
require_once __DIR__ . '/study/buildBoard.php';
require_once __DIR__ . '/study/mostrarBoard.php';
require_once __DIR__ . '/study/posicaoCorreta.php';
require_once __DIR__ . '/study/validar.php';
require_once __DIR__ . '/study/boardCheio.php';
require_once __DIR__ . '/study/trocaJogador.php';
require_once __DIR__ . '/study/vencedor.php';
require_once __DIR__ . '/study/jogarDnv.php';



do {
    $jogadores = getNomeJogadores();
    $jogador = ICONE_JOGADOR_1;
    $board = buildBoard();
    $vencedor = null;
    while ($vencedor === null) {
        echo mostrarBoard($board);
        $posiçao = (int) readline("Jogador {$jogador}, Digite sua posiçao \n");
        if (!posiçaoCorreta($posiçao, $board)) {
            continue;
        }
        $board[$posiçao] = $jogador;
        if (validar($board, ICONE_JOGADOR_1)) {
            $vencedor = ICONE_JOGADOR_1;
        } elseif (validar($board, ICONE_JOGADOR_2)) {
            $vencedor = ICONE_JOGADOR_2;
        } else {
            $vencedor = null;
        };
        if (!boardCheio($board)) {
            break;
        }
        $jogador = trocaJogador($jogador);
    };
    echo mostrarBoard($board);
    echo vencedor($vencedor, $jogadores);

    $jogarNovamente = jogarDnv();
} while ($jogarNovamente === true);
