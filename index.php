<html>
	<head>
		<tittle>Programação Web</title>
		<meta charset = "utf-8">
	</head>
	
	<body>
		<?php
			
		// Declaração de varíaveis
			$num1 = 10; $num2 = 15; $soma = 0; $num3 = 500; $num4 = 300; $sub = 0; $num5 = 20; $num6 = 20; $multi = 0; $num7 = 100; $num8 = 5; 
			$divi = 0; $restonum5 = 0; $restonum2 = 0;
			//Projeto 1909 - Trabalhando com operadores
			echo "trabalhando com estrutura de operadores";
			echo "</br> Operadores Aritiméticos";
			echo "</br> Operador Soma (+)  ";
			//Operação de soma
			$soma = $num1 + $num2;
			echo "</br> Somando os números ".$num1. " e " .$num2;
			echo "</br> O resultado da soma dos valores ".$num1." e ".$num2. "
			é = ".$soma; //Saida do processo
			
			
		
			echo "</br> </br> Operador (-) ";
			//Operação de subtração
			$sub = $num3 - $num4;
			echo "</br> Subtraindo os números ".$num3. " e " .$num4;
			echo "</br> O resultado da subtração dos valores ".$num3." e " .$num4. "
			é = ".$sub; //Saida do processo
			
			
			echo "</br></br> Operador (*) ";
			//Operador de Multiplicação
			$multi = $num5 * $num6;
			echo "</br> Multiplicando os números ".$num5. " e " .$num6;
			echo "</br> O resultado da multiplicação dos valores ".$num5." e " .$num6. " é = " .$multi; //Saido do processo
			
	
			
			echo "</br></br> Operador (/) ";
			echo "</br> Dividindo os números ".$num7. " e " .$num8;
			//Operador de divisão
			$divi = $num7 / $num8;
			echo "</br> O resultado da divisão dos valores ".$num7." e " .$num8. " é = " .$divi; //Saido do processo
			
			
			//Operador de resto de Divisão
			echo"</br>";
			echo "</br> Operador RESTO Divisão (%) "; //Operação devolve o resto da divisão
			
			$restonum2 = $num2 % 2;
			$restonum5 = $num5 % 2;
			
			echo "</br> Saida do resto de ".$num2. " é = ".$restonum2;
			echo "</br> Saida do resto de ".$num5. " é = ".$restonum5;
			
			echo"</br>";
			echo"</br>*********************************************************";
			echo"</br>";
			
			echo"</br> Operadores de Incremento/Decremento";
			echo"</br> Operador de Incremento (++)";
			echo "</br> Valor da variavel num1 = ".$num1. " incrementado";
			$num1++; //Soma+ 1 ao valor da variavel, o mesmo que $num1 = $num1 + 1
			echo"</br> Novo valor apos uso do operador incremento = ".$num1;
			
			echo"</br>";
			
			echo"</br> Operadores de Incremento/Decremento";
			echo"</br> Operador de Incremento (--)";
			echo "</br> Valor da variavel num2 = ".$num2. " incrementado";
			$num2--; //Soma+ 1 ao valor da variavel, o mesmo que $num2 = $num2 - 1
			echo"</br> Novo valor apos uso do operador decremento = ".$num2;
			
			
			echo"</br>";
			echo"</br>*********************************************************";
			echo"</br>";
			
			echo"</br> Operadores relacionais";
			echo"</br> Operador MAIOR (>)";
			echo"</br> Valor 1 =" .$num1." e Valor2 = ".$num2;
			echo"</br> Valor 1 > Valor2 = "  .(boolval($num1 > $num2)? 'True':'False');
			
			echo"</br>";
			
			echo"</br> Operadores MAIOR/IGUAL (>=)";
			echo"</br> Valor 1 =" .$num1." e Valor2 = ".$num2;
			echo"</br> Valor 1 >= Valor2 = " .(boolval($num1 >= $num2)? 'True':'False');
			//a linha anterior é uma condicional se reduzido, o mesmo que if (conficao) (<instruçoes>). Veja abaixo
			
			/* if ($num1 >= $num2) (
					echo "True";
			)else(
				echo"False";
			)
			*/
			echo"</br>";
			echo"</br> Operador MENOR (<)";
			echo"</br> Valor 1 =" .$num1." e Valor2 = ".$num2;
			echo"</br> Valor 1 < Valor2 = "  .(boolval($num1 < $num2)? 'True':'False');
			
			echo"</br>";
			echo"</br> Operadores MENOR/IGUAL (<=)";
			echo"</br> Valor 1 =" .$num1." e Valor2 = ".$num2;
			echo"</br> Valor 1 >= Valor2 = " .(boolval($num1 <= $num2)? 'True':'False');
			
			echo"</br>";
			echo"</br> Operador Igualdade (==)";
			echo"</br> Valor 1 =" .$num1." e Valor2 = ".$num2;
			echo"</br> Valor 1 < Valor2 = "  .(boolval($num1 == $num2)? 'True':'False');
			
			echo"</br>";
			echo"</br> Operador Diferença (!=)";
			echo"</br> Valor 1 =" .$num1." e Valor2 = ".$num2;
			echo"</br> Valor 1 < Valor2 = "  .(boolval($num1 != $num2)? 'True':'False');
			
			
			
			
			
		?>
	</body>
</html>