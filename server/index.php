<?php

require_once  'vendor/autoload.php';

use WebSocketLocalServer\ChatComponent;
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new ChatComponent()
        )
    ),
    8000
);

$server->run();

    // Run the server application through the WebSocket protocol on port 8080
    // $app = new Ratchet\App('localhost', 8000);
    // $app->route('/chat', new ChatComponent, array('*'));
    // $app->route('/echo', new Ratchet\Server\EchoServer, array('*'));
    // $app->run();