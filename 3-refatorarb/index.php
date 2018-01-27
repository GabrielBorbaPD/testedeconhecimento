<?php

class MyUserClass
{
	public function getUserList($dbconn = null)
	{
		/** Verificação de segurança
		- $url recebe o valor da URL atual
		- A função eregi para para não diferençiar entre maiúsculo e minúsculas.
		**/

		$url = $_SERVER["PHP_SELF"];
		if(eregi("class.Upload.php", "$url")) { 
			header("Location: ../index.php");
		}

		// Conexão verificando se veio parâmetro e se já foi instanciada

		if (!isset($dbconn) || !($dbconn instanceOf DatabaseConnection)) {
			$dbconn = new DatabaseConnection('localhost','root','');
		}
		$results = $dbconn->query('SELECT name FROM users');
		sort($results);
		return $results;
	}
}

?>
