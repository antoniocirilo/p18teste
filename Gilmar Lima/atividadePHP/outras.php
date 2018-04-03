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
	
	
?>