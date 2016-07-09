<form method="post" class='form_valida'>
	<h1>Editar Pessoa</h1>
	<label>Nome da pessoa:</label>
	<input class='field_valida' type="text" name="nome" value="<?= $dados['nome']; ?>" />
	<input type="submit" value="Editar">
</form>	

<?php
	if($_POST){
	    $nome = $_POST['nome'];
	    $id   = $_GET['editar'];
	    $sql  = " UPDATE tb_pessoa SET nome = '$nome' WHERE id = $id ";		

	    if(query($sql)){
	    	header("Location: ?pagina=modulo");
	    }
	}
?>	