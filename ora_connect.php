<?php 

$ora_user = "##LOGIN_ORACLE##"; 
$ora_senha = "##SENHA_ORACLE##"; 
$ora_bd = "(DESCRIPTION=
          (ADDRESS_LIST=
            (ADDRESS=(PROTOCOL=TCP) 
              (HOST=##IP_BANCO_ORACLE##)(PORT=1521)
            )
          )
          (CONNECT_DATA=(SERVICE_NAME=##NOME_INSTANCIA_ORACLE##))
     )"; 

if ($ora_conexao = OCILogon($ora_user,$ora_senha,$ora_bd) ); 

else{
	echo "Erro na conexão com o Oracle.";		
	exit;
}
?>