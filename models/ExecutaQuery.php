<?php

public class ExeculteQuerys implements CRUD{

    $conexaoPos = PDOConnection::getConnection();    //post
    $conexaoMys = ConnectionPDO::getConnection();    //mysql

    public function executeQuery($sql){
        //TODO
    }

    public function findRow($sql){
        //TODO
    }

    public function findAll($sql){
        //TODO
    }

}