<?php
	$dadosBanco = 
	[
		'host'    => 'localhost',
		'usuario' => 'root',
		'senha'   => '123456',
		'banco'   => 'crud',
	];

	function validaDadosDoBanco(array $dadosBanco)
	{
		return (is_array($dadosBanco) && count($dadosBanco) > 0);
	}

	function obterConexao(array $dadosBanco)
	{
		if(validaDadosDoBanco($dadosBanco))
		{
     		return mysqli_connect($dadosBanco['host'], $dadosBanco['usuario'], $dadosBanco['senha'], $dadosBanco['banco']);
		}
		throw new Exception('Os dados de conexao estao invalidos!');
	}

	function validaQuery($query = null)
	{
		return ((!is_null($query) && is_string($query)) === true);
	}

	try
	{
    	$link = obterConexao($dadosBanco);
	}   catch(Exception $e)
	{
		echo $e->getMessage();
	}


	function fetchAssoc($query = null)
	{
		global $link;
		$dados = [];
		if(validaQuery($query))
		{	
			try 
			{
				if($result = $link->query($query))
				{
					while($row = $result->fetch_assoc())
					{
						$dados[] = $row;
				    }
				return $dados;
			
				}
				
			} catch (Exception $e) 
			{
            $result = 'Exceção capturada: ' . $e->getMessage(). "\n";
            die;
            }

		throw new Exception('Erro na query');		
		}
	}

	function query($query)
	{
		global $link;
		if(validaQuery($query))
		{
			return $link->query($query);
		}
	}