<?php

public class PDOConnection{

	$config = parse_ini_file('config/config.ini');

	public function getConnection(){
		try{
			$conn = new PDO("host =".$config['host']." dbname=".$config['dbnome']." user =".$config['username']." pass =".$config['password']." ");

			$conn->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false ); // pode ser ignorado
      		$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // pode ser ignorado
			return $conn;

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}
	}
}