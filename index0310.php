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
		
		
			
			
		
		?>		
	</body>
</html>