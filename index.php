<html>
<head>
	<title>Programando em PHP</title>
	<meta charset = "utf-8">
</head>
<body>
	<?php
	//declaraçao de variaveis
	$user = "Admin";
	$pword = 1234;
	$teste = false;
	//trabalhando com operador logico E (&&)
	//E (&&) As duas precisam ser verdadeiras
	echo "</br> Operador E = &&";
	echo "</br> Analise de login e senha";
	echo "</br>" .(boolval(($user =="Admin") && ($pword == 1234))? 'Acesso Liberado':'Acesso negado');
	echo "</br> *************************";
	//trabalhando com operador logico OU (||)
	echo"</br>Operador OU = ||";
	//OU (||) Qualquer uma das duas pode ser verdadeiro
	echo "</br>" .(boolval(($user =="Admin") || ($pword == 1224))? 'Acesso Liberado':'Acesso negado');
	//Operador logico NÃO (!) nega ação
	echo "</br> *************************";
	echo"</br> O valor da variavel teste é " .(boolval($teste)? 'True':'False');
	echo"</br> Operador logico Não ! " .(boolval(!$teste)? 'True':'False');
	echo "</br> *************************";
	
	
	?>
</body>	