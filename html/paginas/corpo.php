<body>
	<div class="container" background-color=#cff>
        
  		<div class="row">		
		   <div class="col-sm-2">&nbsp;</div>
		   <div class="col-sm-8">
		        <img width="100px" height="100px" src="images2.png"/>
		   </div>
 		   <div class="col-sm-2">&nbsp;</div>
	    </div>

		<div class="row">
			<div class="col-sm-12">&nbsp;</div>
		</div>

		     		
		<div class="row" id='form_valida'>
			<div class="col-sm-2">&nbsp;</div>
		 		<div class="col-sm-8">
					<table border="1" width="100%" align="center" class="table table-bordered">
				    <tr>
				        <td colspan="2" align="center">
		    	    	Sistema de cadastro - Inserir novo registro
		        		<a href="?pagina=modulo&acao=inserir">
		     	 		criar nova pessoa
		   				</a>
			   			</td>	
				    </tr>	
				
				    <tr>
					   	<td align="center"><b>Nome</b></td>
					   	<td align="center"><b>Acao</b></td>
					</tr>	
					
					<?php foreach($dados as $pessoas) { ?>   		   
					<tr>
					    <td><?= $pessoas['nome']; ?></td>
					    <td align="center">
					 	    <a href="?pagina=modulo&editar=<?= $pessoas['id']; ?>">Editar</a>&nbsp;
					    	<a class='excluir' href="?pagina=modulo&acao=excluir&id=<?= $pessoas['id']; ?>">Excluir</a>&nbsp;
					    </td>
					</tr>	
					<?php } ?>			
					</table>	
				</div>
				<div class="col-sm-2">&nbsp;</div>
			<div>	
		</div>
	</div>
</div>	
</body>	