<?php
    $pos = $_GET['pos'];
    $pos2 = $pos+2;
    $pos3 = $pos2+1;
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $rg = $_POST['rg'];
    $arquivo = fopen("dados.txt","r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
    }
    $dados = explode(";",$linha);
    fclose($arquivo);
    $dados[$pos] = $nome;
    $dados[$pos2] = $idade;
    $dados[$pos3] = $rg;
    $array = array_filter($dados);
    $file = 'dados.txt';
    unlink($file);
    $arq = fopen("dados.txt","w");
    if($arq == false) die('Não foi possível criar o arquivo');
    foreach($array as $item){
        $arquivo = 'dados.txt';
        $texto = $item.";";
        $file = fopen($arquivo,'a');
        fwrite($file,$texto);
    }
    fclose($arq);
    header("location: index.php");
?>