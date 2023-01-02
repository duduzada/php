<?php
    //declarar as variaveis
	$ladoa ;
	$ladob ;
	$ladoc ;
	
	//receber dados do formulario
	$ladoa = $_POST['ladoa'];
	$ladob = $_POST['ladob'];
	$ladoc = $_POST['ladoc'];
		
	 
	if ($ladoa < $ladob + $ladoc && $ladob < $ladoa + $ladoc && $ladoc <  $ladob + $ladoa){
        if ($ladoa == $ladoc && $ladob == $ladoc){
            echo ("Os valores inseridos formam um triangulo equilátero.");
        }else if ($ladoa == $ladob || $ladoa == $ladoc || $ladob == $ladoc){
            echo ("Os valores inseridos formam um triangulo isosceles.");
        }else {
            echo ("Os valores inseridos formam um triangulo escaleno");
            }
        } else {
            echo ("Os valores inseridos nao formam um triangulo");
            }

        ?>
    </body>
</html>	
