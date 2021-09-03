<?php


//recebe o nome do arquivo
function lerArquivo($nomeArquivo){

    //lê o arquivo como string
    $arquivo = file_get_contents($nomeArquivo);

    //transforma a string em array
    $jsonArray = json_decode($arquivo);
  
    //devolve o array
    return $jsonArray;
}

// busca o aluno dentro da lista e devolve uma lista com os alunos encontrados

function buscarAluno($alunos, $nome){

    $alunosFiltro = [];
    foreach ($alunos as $aluno) {
        if($aluno-> nome == $nome){
            $alunosFiltro[] = $aluno;
        }
    }

    return $alunosFiltro;
}