<?php
	if($_GET){
		if(array_key_exists('pagina', $_GET)){
			if($_GET['pagina'] == 'modulo') {
				$dados = fetchAssoc("SELECT id, nome FROM tb_pessoa");

				if(array_key_exists('acao', $_GET)){
					if($_GET['acao'] == 'excluir'){
						$id  = $_GET['id'];
						$sql = "DELETE FROM tb_pessoa WHERE id = $id";
						if(query($sql)){
							header("Location: ?pagina=modulo");
						} 						
					}
				}
			}
		}
	}

   obterArquivos(DIR_PAGINAS.'topo.php');

   if(array_key_exists('acao', $_GET) && $_GET['acao'] == 'inserir'){
       obterArquivos(DIR_PAGINAS.'inserirPessoa.php', $dados);
   } else if(array_key_exists('editar', $_GET)){    
       $id    = $_GET['editar'];
       $dados = fetchAssoc("SELECT nome FROM tb_pessoa WHERE id = $id");
       obterArquivos(DIR_PAGINAS."editarPessoa.php", $dados[0]);       	
   } else {
       obterArquivos(DIR_PAGINAS.'corpo.php', $dados);
   }

   obterArquivos(DIR_PAGINAS.'rodape.php');
