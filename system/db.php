<?php
declare(strict_types=1);

$appEnvironment = getenv('APP_ENV') ?: 'local';
$servername = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USER') ?: ($appEnvironment === 'production' ? '' : 'root');
$password = getenv('DB_PASSWORD') ?: '';
$dbname = getenv('DB_NAME') ?: ($appEnvironment === 'production' ? '' : 'db_gpc');
$dbPort = (int) (getenv('DB_PORT') ?: 3306);

if ($appEnvironment === 'production' && ($username === '' || $dbname === '')) {
    error_log('Green PC database environment variables are incomplete.');
    http_response_code(503);
    exit('Servicio temporalmente no disponible.');
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($servername, $username, $password, $dbname, $dbPort);
    $conn->set_charset('utf8mb4');
} catch (Throwable $exception) {
    error_log('Green PC database connection failed: ' . $exception->getMessage());
    http_response_code(503);
    exit('Servicio temporalmente no disponible.');
}
