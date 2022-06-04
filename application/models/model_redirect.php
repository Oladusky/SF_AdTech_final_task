<?php 

	class Base
	{
		public static function getConnection()
		{ 
			// Получаем параметры подключения из файла
			$paramsPath = 'data/config_db.php';
			$params = include($paramsPath);

			// Устанавливаем соединение 
			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			$db = new PDO($dsn, $params['user'], $params['password']);
			return $db;
		} 
	}

	class Model_Redirect extends Model
	{
		static function Connect()
		{	
			$db = Base::getConnection();
			return $db;
		}
	}

?>