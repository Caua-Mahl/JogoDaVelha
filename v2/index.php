<?php
require_once __DIR__ . '/study/constantes.php';
require_once __DIR__ . '/study/variaveis.php';

do {
    $jogador1 = readline('Jogador 1 (X)- Digite seu nome: ');
    $jogador2 = readline('Jogador 2 (O)- Digite seu nome: ');
    $jogador = 'X';
    $board = [
        '.', '.', '.',
        '.', '.', '.',
        '.', '.', '.',
    ];
    $vencedor = null;
    while ($vencedor === null) {
        echo <<<EOL

                Posiçoes: | Tabuleiro:
                0|1|2     | $board[0]|$board[1]|$board[2]
                3|4|5     | $board[3]|$board[4]|$board[5]
                6|7|8     | $board[6]|$board[7]|$board[8]

            EOL;
        $posiçao = (int) readline("Jogador $jogador, Digite sua posiçao \n");
        if (!in_array($posiçao, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
            echo "\n Posiçao inexistente, digite novamente \n";
            continue;
        };
        if ($board[$posiçao] !== '.') {
            echo "\n Posiçao ja esta ocupada, digite novamente \n";
            continue;
        };
        $board[$posiçao] = $jogador;
        if (
            ($board[0] === 'X' && $board[1] === 'X' && $board[2] === 'X') ||
            ($board[0] === 'X' && $board[4] === 'X' && $board[8] === 'X') ||
            ($board[0] === 'X' && $board[3] === 'X' && $board[6] === 'X') ||
            ($board[1] === 'X' && $board[4] === 'X' && $board[7] === 'X') ||
            ($board[2] === 'X' && $board[5] === 'X' && $board[8] === 'X') ||
            ($board[2] === 'X' && $board[4] === 'X' && $board[6] === 'X') ||
            ($board[3] === 'X' && $board[4] === 'X' && $board[5] === 'X') ||
            ($board[6] === 'X' && $board[7] === 'X' && $board[8] === 'X')
        ) {
            $vencedor = "X";
            break;
        };
        if (
            ($board[0] === 'O' && $board[1] === 'O' && $board[2] === 'O') ||
            ($board[0] === 'O' && $board[4] === 'O' && $board[8] === 'O') ||
            ($board[0] === 'O' && $board[3] === 'O' && $board[6] === 'O') ||
            ($board[1] === 'O' && $board[4] === 'O' && $board[7] === 'O') ||
            ($board[2] === 'O' && $board[5] === 'O' && $board[8] === 'O') ||
            ($board[2] === 'O' && $board[4] === 'O' && $board[6] === 'O') ||
            ($board[3] === 'O' && $board[4] === 'O' && $board[5] === 'O') ||
            ($board[6] === 'O' && $board[7] === 'O' && $board[8] === 'O')
        ) {
            $vencedor = "O";
            break;
        }
        if (!in_array('.', $board)) {
            break;
        }
        if ($jogador === "X") {
            $jogador = "O";
        } else {
            $jogador = "X";
        }
    };
    echo <<<EOL

                Posiçoes: | Tabuleiro:
                0|1|2     | $board[0]|$board[1]|$board[2]
                3|4|5     | $board[3]|$board[4]|$board[5]
                6|7|8     | $board[6]|$board[7]|$board[8]

            EOL;
    if ($vencedor === 'X') {
        echo "\n O vencedor foi o {$jogador1}!!! \n";
    } elseif ($vencedor === 'O') {
        echo " \n O vencedor foi o {$jogador2}!!! \n";
    } else {
        echo "\n O jogo acabou EMPATADO";
    };
    $jogarNovamente = filter_var(readline("\n Quer jogar novamente? (digite 'True' para sim e 'False' para nao) \n "), FILTER_VALIDATE_BOOL);
    echo "\n";
} while ($jogarNovamente === true);
