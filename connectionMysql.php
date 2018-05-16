<?php

//Conexao PDO para o mysql
public class ConnectionPDO{

    public static function getConnection(){
        try{
            $config     = parse_ini_file('config/config.ini');
            $username   = $config['username'];
            $pass       = $config['password'];
            $connection = new PDO("mysql:dbname=".$config['dbnome']." host=".$config['host']." ", $username, $pass);
            
            return $connection;
        }catch(PDOException $erro){
            echo $erro->getMessage();
        }
    }

    
}
