<?php
function validar(array $board, string $jogador): bool
{
    return ($board[0] === $jogador && $board[1] === $jogador && $board[2] === $jogador) ||
        ($board[0] === $jogador && $board[4] === $jogador && $board[8] === $jogador) ||
        ($board[0] === $jogador && $board[3] === $jogador && $board[6] === $jogador) ||
        ($board[1] === $jogador && $board[4] === $jogador && $board[7] === $jogador) ||
        ($board[2] === $jogador && $board[5] === $jogador && $board[8] === $jogador) ||
        ($board[2] === $jogador && $board[4] === $jogador && $board[6] === $jogador) ||
        ($board[3] === $jogador && $board[4] === $jogador && $board[5] === $jogador) ||
        ($board[6] === $jogador && $board[7] === $jogador && $board[8] === $jogador);
}
