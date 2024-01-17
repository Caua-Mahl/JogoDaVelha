<?php 
function jogarDnv():bool{
    return $jogarNovamente = filter_var(readline("\n Quer jogar novamente? (digite 'True' para sim e 'False' para nao) \n "), FILTER_VALIDATE_BOOL); 
}
?>