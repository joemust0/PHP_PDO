<?php

include_once __DIR__ . "/../vendor/autoload.php";
use App\Persistence\ConnectionFactory;
use App\SystemServices\MonologFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$logger = MonologFactory::getInstance();
$logger->info("Informação que julgo importante enquanto programo para loggar");
$logger->debug("Arquivo main.php rodando...");
$logger->error("Vejo que temos um erro aqui...");

// Criação da instância da fábrica de conexão
$connectionFactory = new ConnectionFactory();

// Recupera a conexão PDO
$pdo = $connectionFactory->createConnection();

try {
    // Consulta SQL para selecionar id e nome da tabela 'usuarios'
    $query = "SELECT id, nome FROM usuario";

    // Preparando a consulta
    $statement = $pdo->prepare($query);

    // Executando a consulta
    $statement->execute();

    // Recuperando os resultados
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    // Exibindo os resultados
    foreach ($result as $row) {
        echo "ID: " . $row['id'] . ", Nome: " . $row['nome'] . "<br>";
    }
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    die("Erro na consulta: " . $e->getMessage());
}
 