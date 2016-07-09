<?php

require_once __DIR__.'/biblioteca/validacaoArquivos.php';
require_once __DIR__.'/biblioteca/autoload.php';
require_once __DIR__.'/biblioteca/conexao.php';


define('DIR', __DIR__.'/html/');
define('DIR_PAGINAS', __DIR__.'/html/paginas/');

$caminho = DIR.'layout.php';

if(verificaArquivoExiste($caminho)){
	obterArquivos($caminho);
} else {
	echo "";
}

