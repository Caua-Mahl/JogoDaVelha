<?php 
    function getNomeJogadores(){
        return [
            readline('Jogador 1 (' . ICONE_JOGADOR_1. ')- Digite seu nome: '),
            readline(' Jogador 2(' . ICONE_JOGADOR_2. ')- Digite seu nome: ')
        ];
    }


?>