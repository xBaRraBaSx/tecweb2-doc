<?php

class Conecta {

    //atributo 
    private static $conn;

    //Método que realiza la conexión y la retorna 
    private static function pegarConexao() {
        //verifica si la conexión es nula 
        if (self::$conn == null) {
            //Tratamiento de Errror
            try {
                self::$conn = new PDO("mysql:host=mysql;dbname=pdo_integrado", "root", "root");
            } catch (Exception $ex) {
                print $ex->getMessage();
            }
        }
        return self::$conn;
    }

    //Método que prepara SQL para la conexión
    protected static function preparaSQL($sql) {
        return self::pegarConexao()->prepare($sql);
    }

}
