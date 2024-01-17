<?php 
function posiçaoCorreta(int $posiçao,array $board):bool {
    if (!in_array($posiçao, [0, 1, 2, 3, 4, 5, 6, 7, 8])) {
        echo "\n Posiçao inexistente, digite novamente \n";
        return false;
    };
    if ($board[$posiçao] !== ICONE_VAZIO) {
        echo "\n Posiçao ja esta ocupada, digite novamente \n";
        return false;
    };  
    return true;  
}
?>