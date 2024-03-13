<?php



$titulo = str_replace('#', '-', $_POST['titulo']); // substitui o # por - para não dar problema na hora de salvar no arquivo.
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL; // PHP_EOL é uma constante que pega o final da linha do sistema operacional.

// abre o arquivo se não existir ele cria.
 $arquivo =  fopen('arquivo.hd', 'a'); // precisa de dois parametros, o nome do arquivo e o modo de abertura.

// escreve no arquivo.
fwrite($arquivo, $texto);

// fecha o arquivo.
fclose($arquivo);

header('Location: abrir_chamado.php');

?>