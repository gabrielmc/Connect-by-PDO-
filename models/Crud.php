<?php

interface CRUD{

    public function executeQuery($sql);
    public function findRow($sql);
    public function findAll($sql);
    
}


