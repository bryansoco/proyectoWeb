<?php
class db
{
	public $mysql = null;

	function __construct()
	{
		try
		{
			$this->mysql = $this->getConnection();
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	private function getConnection()
	{
		$host = "localhost";
		$user = "root";
		$pass = "";
		$database = "proyecto";
		$charset = "utf8";
		$opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
		$pdo = new pdo("mysql:host={$host};dbname={$database};charset={$charset}", $user, $pass, $opt);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
}