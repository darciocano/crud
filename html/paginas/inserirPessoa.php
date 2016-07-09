<form method="post" class='form_valida'>

<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      
      <div class="modal-body">
        
        <label>Nome da pessoa:</label>
		<input class='field_valida' type="text" name="nome" />
		<input type="submit" value="Inserir">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</form>	

<?php
	if($_POST){
	    $nome = $_POST['nome'];
	    $sql  = "INSERT INTO tb_pessoa(nome) VALUES ('$nome')";		

	    if(query($sql)){
	    	header("Location: ?pagina=modulo");
	    }
	}
?>	