<?php

echo '<a href="home.php">Voltar</a><br><br>';

		if(isset($_GET['at11_3']))
		{
			echo 
			"	<b>11.3</b>
				<form method='post' action='outras.php'>
					<p>Digite um número real: <input type='text' name='numero' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
		}	
		if(isset($_GET['at11_4']))
		{
			echo 
			"	<br><b>11.4</b><br>
				<form method='post' action='outras.php'>
					<p>Digite um número: <input type='text' name='numero1' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
		}	
		if(isset($_GET['at11_5']))
		{			
			echo 
			"	<br><b>11.5</b><br>
				<form method='post' action='outras.php'>
					<p>Digite um numerador: <input type='text' name='numero2' /></p>
					<p>Agora, digite um denominador: <input type='text' name='numero3' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
		}			
		if(isset($_GET['at11_6']))
		{
			echo 
			"	<br><b>11.6</b><br>
				<form method='post' action='outras.php'>
					<p>Coloque o valor do seu peso em kg: <input type='text' name='numero4' /></p>
					<p>Agora, ponha o valor da sua altura em metros: <input type='text' name='numero5' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
		}
		if(isset($_GET['at11_7']))
		{
			echo 
			"	<br><b>11.7</b><br>
				<form method='post' action='outras.php'>
					<p>Coloque o valor da nota 1: <input type='text' name='numero6' /></p>
					<p>Coloque o valor da nota 2: <input type='text' name='numero7' /></p>
					<p>Por fim, coloque o valor da nota 3: <input type='text' name='numero8' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
		}
		if(isset($_GET['at11_8']))
		{
			echo 
			"	<br><b>11.8</b><br>
				<form method='post' action='outras.php'>
					<p>Coloque um valor pra tirar desconto: <input type='text' name='numero9' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
		}
		if(isset($_GET['at11_9']))
		{
			echo 
			"	<br><b>11.9</b><br>
				<form method='post' action='outras.php'>
					<p>Coloque um valor pra ser tirado desconto e dado o total: <input type='text' name='numero10' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
		}
		if(isset($_GET['at11_10']))
		{
			echo 
			"	<br><b>11.10</b><br>
				<form method='post' action='outras.php'>
					<p>Informe o valor do salário mínimo: <input type='text' name='numero11' /></p>
					<p>Agora, ponha o valor do seu salário: <input type='text' name='numero12' /></p>
					<input type='submit' value='Enviar' />
				</form>
			";
		}
?>