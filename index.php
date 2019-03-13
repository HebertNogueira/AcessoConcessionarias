<?php
	include "ora_connect.php";
	
	$borda = "0";
	set_time_limit(0);
	
	if(isset($_POST['acesso'])){

		$acesso = $_GET['acesso'];
		$consulta01 = "select * from sistema_acesso_funcao where COD_ACESSO ='$acesso'";
		$consulta02 = "select * from empresas_usuarios where";
				  
		$resultado01 = OCIParse($ora_conexao, $consulta01);
			
		
		if(OCIExecute($resultado01)){
			while( $linha=oci_fetch_array ($resultado01)){
				
				if (!isset($maisQueUm)){
					$maisQueUm = true;
					$consulta02 = $consulta02 . "COD_FUNCAO='$linha[0]'";
				} else {
					$consulta02 = $consulta02 . " and COD_FUNCAO='$linha[0]'";
				}
			
			}				
		}	
		
		$resultado02 = OCIParse($ora_conexao, $consulta02);
	}

	
?>
<html>
	<head>
		<title>Consulta Acessos - Concessionárias</title>
		<link rel="stylesheet" type="text/css" href="../style.css"/>
	</head>
	
<body>
				<form action="index.php" method="post">
							<h3>PROCURAR ACESSOS > USUÁRIOS</h3>
								<TABLE BORDER=<?php echo $borda?> CELLSPACING=0>
									<tr>
										<td style="width: 14em" align='center'>
											<label for="txtListar" > NUMERO DO ACESSO</label>
										</td>
									</tr>	

									<tr>
										<td align='center'>
											<input type="text" name="acesso" style="width: 14em"/>
										</td>
										<td align='center'>
											<button type="submit" name="submit" class="button"><span>PESQUISAR</span></button>
										</td>										
									</tr>

								</table>	
				</form>				
				<?php include "resultado.php";?>

</body>
</html>
<?php include "ora_disconnect.php";?>