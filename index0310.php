<html>
	<head>
	
	</head>
	<body>
		<?php
		//laço de repeticao / enquanto
		$contador = 0; //variavel de controle
		while ($contador < 5){
				echo "</br>" .$contador." - Aula de programação em PHP";
				$contador++; //incrementador
			
		}
		//outro exemplo
		$tabuada = 7;
		$multiplicador = 0;
		$resultado = 0;
		
		while($multiplicador <= 10) {
			$resultado = $tabuada * $multiplicador;
			echo "</br>" .$tabuada. " X " .$multiplicador. " = " .$resultado;
			$multiplicador++;	//incremento
		}
			
			
			
		//condicional do...while
		echo "</br></br>";
		$tab = 1;
		$mult = 0;
		do{
			while ($mult<=10){
				echo"</br>".$tab." X " .$mult. " = ".($tab*$mult);
				$mult++; //incremento
			}
		$mult = 0; //reinicia variavel $mult		
		$tab++; //incremento
		echo "</br>";
		}while ($tab <= 10);
		 
		 
		//laço para
		$X = 0;
		
		for ($X=0; $X<10; $X++){
			echo"</br>" .$X. "Aula de programação WEB";
		}
		 
		 
		//outro exemplo
		for ($m=0; $m <= 10; $m++) {
			$total = 9 * $m;
			echo "</br> 9 X" .$m. " = ".$total;
		}	
		
		//imprimir tipo de dado
		$a = "Unicid";
		$b = 100;
		$c = 2.69;
		$d = false;
		
		
		echo"</br>" .var_dump($a);
		echo"</br>" .var_dump($b);
		echo"</br>" .var_dump($c);
		echo"</br>" .var_dump($d);
		
		
		
			
			
		
		?>		
	</body>
</html>