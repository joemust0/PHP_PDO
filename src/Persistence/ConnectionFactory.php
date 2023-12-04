<?php

namespace App\Persistence;

use PDO;
use PDOException;

class ConnectionFactory
{
    private static $pdo;

    function __construct()
    {
        // Impede a criação de instâncias desta classe
    }

    public static function createConnection()
    {
        if (self::$pdo === null) {
            $host = 'localhost';
            $dbname = 'phppdo';
            $user = 'root';
            $pass = '';


            try {
                // Criando uma instância do objeto PDO
                self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

                // Configurando para lançar exceções em caso de erros
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                // Em caso de erro, exibe a mensagem de erro
                die("Erro na conexão: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
