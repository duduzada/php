<html>
	<head>
	
	</head	
<body>
	
	
	<?php
	//declaração de variaveis
	$media = 2;
	
	//Estrutura condicional  - simples
	//Analisa uma condição e executa ação se saida for verdadeira
	//Verificar se aluno está aprovado MEDIA >=6
	
	if ($media >= 6){
			echo"</br> Aluno está aprovado - Nota = ".$media;
	}
		
	echo "</br></br>******************************";
	//Estrutura condicional - Composta
	//Analise uma condicao e executa um conjunto de instrucoes se saida for verdadeira
		//Verificar se aluno esta aprovado ou reprovado
	
	if ($media >= 6){
		//acao se for verdadeiro
		echo"</br>Aluno aprovado - Nota = ".$media;
	}else {
		//acao se for falso
		echo"</br> Aluno reprovado - Nota = ".$media;
	}
		echo "</br></br>******************************";
		//Estrutura condicional - encadeada
		//analisa se o aluno esta aprovado >=6 reprovado <3 ou de recuperacao >-=3 até 5,99
		if($media <3){
			echo"</br> Aluno Reprovado - Nota = " .$media;
		}else if($media>=6) {
				echo"</br>Aluno aprovado - Nota = " .$media;
		}else{
				echo"</br>Aluno em recuperação - Nota = " .$media;
		}
		
	
	
	
	?>
	</body>
</html>