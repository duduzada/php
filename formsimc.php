<?php
    //declarar as variaveis
	$nome = null ;
	$peso = null;
	$altura =  null;
	$imc = null;
	
	//receber dados do formulario
	$nome = $_POST['nome'];
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];
	$imc = $peso / ($altura * $altura);	
	$imc = round($imc,1);
	 
	if ($imc <= 18.5){
		echo ("Olá ".$nome."! Seu IMC é: ".$imc);
		echo ("</br>");
		echo ("Seu índice aponta que você esta abaixo do peso normal.");
		echo ("</br>");
		echo (" Mensagem: Cuide sempre da sua saúde, procure um médico ou especialista.");
    }else if ($imc > 18.5 || $imc <= 25){
		echo ("Olá ".$nome."! Seu IMC é: ".$imc);
		echo ("</br>");
		echo ("Seu índice aponta que você está com peso normal.");
		echo ("</br>");
		echo (" Mensagem: Cuide sempre da sua saúde, procure um médico ou especialista.");
    }else if ($imc > 25 || $imc <= 30){
        echo ("Olá ".$nome."! Seu IMC é: ".$imc);
		echo ("</br>");
		echo ("Seu índice aponta que você está acima do peso normal.");
		echo ("</br>");
		echo (" Mensagem: Cuide sempre da sua saúde, procure um médico ou especialista.");
    }else if ($imc > 30 ){
        echo ("Olá ".$nome."! Seu IMC é: ".$imc);
		echo ("</br>");
		echo ("Seus índices apontam obesidade.");
		echo ("</br>");
		echo (" Mensagem: Cuide sempre da sua saúde, procure um médico ou especialista.");
            }
    

        ?>
    </body>
</html>	
