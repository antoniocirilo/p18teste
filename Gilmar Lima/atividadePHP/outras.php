<?php

echo '<a href="home.php">Voltar</a><br><br>';

	if (isset($_POST['numero']))
		echo "O número armazenado é: <b>". $_POST['numero'] ."</b>";
		
	if (isset($_POST['numero1']))
		echo "O dobro do número armazenado é: <b>". ($_POST['numero1']*2) ."</b>";
	
	if (isset($_POST['numero2'])and isset($_POST['numero3']))
		echo "O resultado da fração é: <b>". ($_POST['numero2']/$_POST['numero3']) ."</b>";
	
	if (isset($_POST['numero4']) and (isset($_POST['numero5'])))
		echo "O valor do seu IMC é: <b>". ($_POST['numero4']/($_POST['numero5']*$_POST['numero5'])) ."</b>";
	
	if (isset($_POST['numero6']) and (isset($_POST['numero7'])) and (isset($_POST['numero8'])))
		echo "O resultado da média é: <b>". (($_POST['numero6'] + $_POST['numero7'] + $_POST['numero8'])/3) ."</b>";
	
	if (isset($_POST['numero9']))
		echo "15% do valor armazenado é: <b>". (($_POST['numero9']*15)/100) ."</b>";
	
	if (isset($_POST['numero10']))
		echo "15% de desconto mais o valor é: <b>". ((($_POST['numero9']*15)/100) + $_POST['numero10']) ."</b>";
	
	if (isset($_POST['numero11']) and (isset($_POST['numero12'])))
		echo "Quantidade de salários mínimos que ganha: <b>". ($_POST['numero12'] / $_POST['numero11']) ."</b>";
	
	if (isset($_POST['numero13']))
	{
		if($_POST['numero13'] < 0)
		echo "<b>True</b>"."<br>Número negativo";
		
		if($_POST['numero13'] > 0)
		echo "<b>False</b>"."<br>Número positivo";
	}
	
	if (isset($_POST['numero14']))
	{
		if((($_POST['numero14'] % 2)==0))
		echo "<b>True</b>"."<br>É divisível por 2";
		
		else
		echo "<b>False</b>"."<br>Não é divisível por 2";
	}
		
	if (isset($_POST['numero15']))
	{
		if((($_POST['numero15'] % 3)==0))
		echo "<b>True</b>"."<br>É divisível por 3";
		
		else
		echo "<b>False</b>"."<br>Não é divisível por 3";
	}
	
	//ATIVIDADE DE REPETIDORES
	
	//atividade 4
	if (isset($_POST['num']))
	{
		$numFinal = $_POST['num']+20;
			for($i=$_POST['num']; $i<=$numFinal; $i++)
				echo "$i ";
	}
	//atividade 5
	if ((isset($_POST['num1'])) and (isset($_POST['num2']))) 
	{
		$soma = 0;
		if(($_POST['num1'] < $_POST['num2'] ))
		{
			for($i=$_POST['num1']; $i<=$_POST['num2']; $i++)
				$soma = $soma + $i;
			
			echo "$soma";
		}
		else
		if(($_POST['num2'] < $_POST['num1'] ))
		{
			for($i=$_POST['num2']; $i<=$_POST['num1']; $i++)
				$soma = $soma + $i;
			
			echo "$soma";
		}
		else
			echo "Os numeros digitados são iguais";	
	}
	//atividade 6
	if ((isset($_POST['numA'])) and (isset($_POST['numB']))) 
	{
		if(($_POST['numA'] < $_POST['numB'] ))
		{
			for($i=$_POST['numA']; $i<=$_POST['numB']; $i++)
				echo "$i ";
		}
		else
		if(($_POST['numB'] < $_POST['numA'] ))
		{
			for($i=$_POST['numA']; $i>=$_POST['numB']; $i--)
				echo "$i ";
		}
		else
			echo "Os numeros digitados são iguais";	
	
	}
	
		//ATIVIDADE DE MANIPULAÇÃO DE STRINGS
		//atividade 1
	if (isset($_POST['nome'])) 
	{
		$nome = $_POST['nome'];
		$tamanho = strlen($nome);
		
		for($i=$tamanho ; $i>=1 ; $i--)
			echo(substr($nome, $i-1,1));
	}
	
	
?>