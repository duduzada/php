<?php
    //declarar as variaveis
	$nome = null;
	$dia = null;
	$mes = null;
	$ano = null;
	$idade = null;
	
	//receber dados do formulario
	$nome = $_POST['nome'];
	$dia = $_POST['dia'];
	$mes = $_POST['mes'];
	$ano = $_POST['ano'];
	$idade ; 
	$anoAtual = 2022;
		
		echo "</br> Olá  ".$nome. ", Seja bem vindo (a)!";
		echo ("</br>");
	 
	 if ($mes <= 10)
        {
            echo("</br>");
            echo ("Você tem atualmente: " );
            echo $anoAtual - $ano;
            echo (" Anos de Idade!");
            echo ("</br>");
        }
        if ($mes > 10) 
        {
            echo("</br>");
            echo ("Você tem atualmente: " );
            echo 2021 - $ano;
			echo (" anos de idade." );
            echo ("</br>");
        };
		
	//signos 
	if
	($mes == "03" and $dia >= 21 OR $mes == "04" and $dia < 20) {		
		echo "</br> Com base na sua data de nascimento seu signo é: Aries";
		echo ("</br>");
		echo ("</br> Frase : Eu sou o mestre do meu destino. Eu sou o capitão da minha alma");
		} else if ($mes == "04" and $dia >= 21 OR $mes == "05" and $dia < 20) {		
	    echo "</br> Com base na sua data de nascimento seu signo é: Touro";
		echo ("</br>");
		echo ("</br> Frase : Aquilo que não te mata, te fortalece.");
		} else if ($mes == "05" and $dia >= 21 OR $mes == "06" and $dia < 20) {	
	    echo "</br> Com base na sua data de nascimento seu signo é: Gêmeos";
		echo ("</br>");
		echo ("</br> Frase : Um dia sem risadas é um dia desperdiçado.");
		} else if ($mes == "06" and $dia >= 21 OR $mes == "07" and $dia < 20) {
		echo "</br> Com base na sua data de nascimento seu signo é: Câncer";
		echo ("</br>");
		echo ("</br> Frase : Eu consigo fazer coisas que você não consegue. Você consegue fazer coisas que eu não consigo. Juntos, podemos fazer coisas incríveis.");
		} else if ($mes == "07" and $dia >= 21 OR $mes == "08" and $dia < 20) {
		echo "</br> Com base na sua data de nascimento seu signo é: Leão";
		echo ("</br>");
		echo ("</br> Frase : O seu amor me deixa mais forte. Mas o seu ódio me torna indomável.");
		} else if ($mes == "08" and $dia >= 21 OR $mes == "09" and $dia < 20) {
		echo "</br> Com base na sua data de nascimento seu signo é: Virgem";
		echo ("</br>");
		echo ("</br> Frase : Você ainda não viveu o dia, a menos que tenha feito algo para alguém que nunca poderá te retribuir a boa ação.");
		} else if ($mes == "09" and $dia >= 21 OR $mes == "10" and $dia < 20) {	
		echo "</br> Com base na sua data de nascimento seu signo é: Libra";
		echo ("</br>");
		echo ("</br> Frase : Se a raça humana quiser ter um período indefinido de prosperidade material, as pessoas terão apenas que se comportar de forma pacífica e prestativa umas com as outras.");
		} else if ($mes == "10" and $dia >= 21 OR $mes == "11" and $dia < 20) {
	    echo "</br> Com base na sua data de nascimento seu signo é: Escorpião";
        echo ("</br>");
		echo ("</br> Frase : Eu não preciso do príncipe encantado para ter meu próprio final feliz.");
		} else if ($mes == "11" and $dia >= 21 OR $mes == "12" and $dia < 20) {
		echo "</br> Com base na sua data de nascimento seu signo é: Sagitário";
		echo ("</br>");
		echo ("</br> Frase : Não siga para onde o caminho te leva. Por outro lado, ande onde não há caminho e deixe uma trilha.");
		} else if ($mes == "12" and $dia >= 21 OR $mes == "01" and $dia < 20) {
		echo "</br> Com base na sua data de nascimento seu signo é: Capricórnio";
		echo ("</br>");
		echo ("</br> Frase : Existem coisas que são tão sérias, que você precisa rir delas.");
		} else if ($mes == "01" and $dia >= 21 OR $mes == "02" and $dia < 20) {	
		echo "</br> Com base na sua data de nascimento seu signo é: Aquário";
		echo ("</br>");
		echo ("</br> Frase :Elevem seus corações. Cada nova hora traz novas chances. Aos recomeços!");
		} else if ($mes == "02" and $dia >= 21 OR $mes == "03" and $dia < 20) {	
		echo "</br> Com base na sua data de nascimento seu signo é: Peixes";
		echo ("</br>");
		echo ("</br> Frase : A melhor coisa que você vai aprender é amar e ser correspondido.");
		} else {
		echo "</br> Valor inválido";
		}



	
?>	