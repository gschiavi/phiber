<?php

require_once 'Link.php';
/**
 * Created by PhpStorm.
 * User: lukee
 * Date: 16/03/17
 * Time: 16:31
 */
abstract class PhiberPersistenceFactory
{
    /**
     * @return mysqli|PDO
     */
    public function getConnection(){
        return Link::getConnection();
    }

    public abstract static function create($obj);
    public abstract static function update($obj, $id);
    public abstract static function delete($obj, $condicoes = [], $conjuncoes = []);
    public abstract static function rowCount($obj, $condicoes = [], $conjuncoes = []);
    public abstract static function searchWithConditions($obj, $condicoes, $retornaPrimeiroValor = false);
    public abstract static function createQuery($query);
//    public abstract static function innerJoin($obj1, $obj2, $condicoes = null, $retornaSoPrimeiro = false, $campos = null);
}