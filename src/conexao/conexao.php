<?php

class Conectares
{
    public static $usuario = "";
    public static $senha = "";
    private static $Connect = null;

    private  static function conectar()
    {
        try {

            if (self::$Connect == null) {
                self::$Connect = new PDO(
                    'pgsql:host=localhost;dbname=bd_agenda;',
                    self::$usuario,
                    self::$senha
                );
            }
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();

            die;
        }
        return self::$Connect;
    }
    public function getConn()
    {
        return self::conectar();
    }
}
