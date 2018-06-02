<?php

use Phalcon\Mvc\Micro;
use app\models\GamePage;
use app\models\Character;
use app\models\GamePageLoader;

require_once __DIR__ . '/vendor/autoload.php';

$loader = new \Phalcon\Loader();

//Register namespaces here

$loader->registerNamespaces([
    'app\models' => __DIR__ . '/models/',
    'app\library' => __DIR__ . '/library/',
]);
$loader->register();

$di = new \Phalcon\Di\FactoryDefault();

//Set DI services here

$app = new Micro($di);

$app->response->setHeader('Access-Control-Allow-Origin','*');

$app->post(
    '/api/v1/next-page',
    function () use ($app){

        $data = $app->request->getJsonRawBody(true);

        $game_page = GamePageLoader::loadNextPage($data['page'], new Character($data['character']), $data['answer']);

        $app->response->setJsonContent($game_page->toArray());
        $app->response->send();
    }
);

$app->post(
    '/api/v1/load-page',
    function () use ($app){

        $data = $app->request->getJsonRawBody(true);

        $game_page = new GamePage($data['page'], new Character($data['character']));
        $game_page->run();

        $app->response->setJsonContent($game_page->toArray());
        $app->response->send();
    }
);

$app->post('/api/v1/report-bug',
    function () use ($app){
        $data = $app->request->getJsonRawBody(true);

        $text = "Page: {$data['page']}\n";
        $text .= "Message:\n" . (new \Phalcon\Escaper())->escapeHtml($data['text']);

        $res = \app\models\Messager::send(
            'New Bug Report',
            $text
        );

        $app->response->setJsonContent([
            'status' => $res?'OK':'FAIL',
        ]);
        $app->response->send();
    }
);

$app->options('/api/v1/(next-page|load-page|report-bug)', function () use ($app){
    $app->response->setHeader('Access-Control-Allow-Methods', 'POST, GET');
    $app->response->setHeader('Access-Control-Allow-Headers', 'Content-Type');
    $app->response->setHeader('Access-Control-Max-Age', '86400');
    $app->response->send();
});

$app->get('/api/test',function (){
    phpinfo();
});

$app->response->setContentType('application/json', 'UTF-8');

try{
    $app->handle();
}catch (Exception $e)
{
    $app->response->setJsonContent([
        'error' => $e->getMessage(),
    ]);
    $app->response->setStatusCode(400);
    $app->response->send();
}

