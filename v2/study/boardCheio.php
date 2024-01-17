<?php 
function boardCheio(array $board):bool{
    if (!in_array(ICONE_VAZIO,$board)) {
        return false;
    } else {
        return true;
    }
}

?>