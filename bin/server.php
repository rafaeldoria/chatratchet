<?php
use Ratchet\Server\IoServer;
use App\Chat;

require dirname(__DIR__) . '/vendor/autoload.php';

$server = IoServer::factory(
    new Chat(),
    8080
);

if($server) echo 'RUN SERVER';
$server->run();