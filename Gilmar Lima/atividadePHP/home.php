<!doctype html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Primeira Pagina PHP</title>
	</head>
<body>

<p><h2>Gilmar de Lima</h2><p>
<p><h3>Selecione o exercicio desejado:</h3><p><br>

<a href="home.php"> home </a><br>
<a href="?at1"> Atividade 1 </a><br>
<a href="?at2"> Atividade 2 </a><br>
<a href="?at3"> Atividade 3 </a><br>
<a href="?at4"> Atividade 4 </a><br>
<a href="?at5"> Atividade 5 </a><br>
<a href="?at6"> Atividade 6 </a><br>
<a href="?at7"> Atividade 7 </a><br>
<a href="?at8"> Atividade 8 </a><br>
<a href="?at9"> Atividade 9 </a><br>
<a href="?at10"> Atividade 10 </a><br>
<a href="?at11"> Atividade 11 </a><br>
<a href="?at12"> Atividade 12 </a><br>
<a href="?at13"> Atividade 13 </a><br>
<a href="?at14"> Atividade 14 </a><br>

<p><h3>atividade de repetidores:</h3><p><br>
<a href="?att1"> Atividade 1 </a><br>
<a href="?att2"> Atividade 2 </a><br>
<a href="?att3"> Atividade 3 </a><br>
<a href="?att6"> Atividade 6 </a><br>

<?php
echo "<br>";
	if(isset($_GET['at1']))
	{
		echo "É preciso fazer todos os algoritmos<br>
		para aprender Python!!";
	}
	if(isset($_GET['at2']))
	{
		$IFRN = "Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte";

		echo $IFRN;
	}
	if(isset($_GET['at3']))
	{
		$number = 3.5; 

		echo "O número armazenado é ".$number;
	}
	if(isset($_GET['at4']))
	{
		$numero = 30; 
		$dobro = $numero*2;

		echo "Número: ".$dobro;
	}
	if(isset($_GET['at5']))
	{
		$numerad = 3;
		$denominad = 2;
		
		echo "O resultado da fração é: ".$numerad/$denominad;
	}
	if(isset($_GET['at6']))
	{
		$peso = 60;
		$altura = 1.80;
		
		echo "IMC= ".$peso/($altura*$altura);
	}
	if(isset($_GET['at7']))
	{
		$nota1 = 10;
		$nota2 = 7;
		$nota3 = 6;
		
		echo "MÉDIA= ".($nota1+$nota2+$nota3)/3;
	}
	if(isset($_GET['at8']))
	{
		$valor = 10;
		
		echo "15% de 10 é <b>". ($valor*15)/100 ."</b>";
	}
	if(isset($_GET['at9']))
	{
		$produto = 10;
		
		echo "Um produto de ".$produto." reais com desconto de 15%, fica: <b>". ((($produto*15)/100) + $produto) ." reais</b>";
	}
	if(isset($_GET['at10']))
	{
		$salarioM = 924;
		$Mysalario = 2800;
		
		echo "Eu recebo: <b>". ($Mysalario/$salarioM) ." salário(s) mínimo(s)</b>";
	}
	if(isset($_GET['at11']))
	{	
		echo "<b>Sub-atividades da número 11</b><br>";
		echo "Selecione uma delas:<br>";
		
		echo "<a href='atividade11.php?at11_3'> Atividade 11.3</a><br>";
		echo "<a href='atividade11.php?at11_4'> Atividade 11.4</a><br>";
		echo "<a href='atividade11.php?at11_5'> Atividade 11.5</a><br>";
		echo "<a href='atividade11.php?at11_6'> Atividade 11.6</a><br>";
		echo "<a href='atividade11.php?at11_7'> Atividade 11.7</a><br>";
		echo "<a href='atividade11.php?at11_8'> Atividade 11.8</a><br>";
		echo "<a href='atividade11.php?at11_9'> Atividade 11.9</a><br>";
		echo "<a href='atividade11.php?at11_10'> Atividade 11.10</a><br>";
		
	}
	if(isset($_GET['at12']))
	{
		echo 
			"	
				<form method='post' action='outras.php'>
					<p>Digite um numero inteiro qualquer: <input type='text' name='numero13' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
	}
	if(isset($_GET['at13']))
	{
		echo 
			"	
				<form method='post' action='outras.php'>
					<p>Digite um numero inteiro qualquer: <input type='text' name='numero14' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
	}
	if(isset($_GET['at14']))
	{
		echo 
			"	
				<form method='post' action='outras.php'>
					<p>Digite um numero inteiro: <input type='text' name='numero15' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
	}
	if(isset($_GET['at15']))
	{
		echo 
			"	
				<form method='post' action='outras.php'>
					<p>Digite um numero inteiro: <input type='text' name='numero16' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
	}
	
	// ATIVIDADE DE REPETIDORES
	if(isset($_GET['att1']))
	{
		for($i=1 ; $i<51 ; $i++)
			echo "$i ";
	}
	if(isset($_GET['att2']))
	{		
		for($i=50 ; $i>0 ; $i--)
			echo "$i ";
	}
	if(isset($_GET['att3']))
	{		
		
	}
	if(isset($_GET['att6']))
	{		
		echo 
			"	
				<form method='post' action='outras.php'>
					<p>Digite um numero A: <input type='text' name='numA' /></p>
					<p>Digite um numero B: <input type='text' name='numB' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
	}
		
	

?>

</body>
</html>