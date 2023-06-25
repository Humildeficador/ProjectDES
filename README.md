create connectDB.php into "server/" with this code:

<?php 
	$db = 'camisetasmilgrau';
	$user = 'root';
	$pass = '';

	try {
		$connectDB = new PDO ("mysql:host=localhost;dbname=$db", $user, $pass);
		$connectDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$connectDB->exec('set names utf8');
	} catch (PDOException $e) {
		echo 'Erro na conexão:' . $e->getMessage();
	}