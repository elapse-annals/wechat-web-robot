<?php
# run.php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/function.php';
$path = __DIR__ . '/tmp/';

$options = config('webrobot');


while (!checkPortBindable($options['swoole']['ip'], $options['swoole']['port'])) {
    $options['swoole']['port'] += 1;
}
if ($argv && isset($argv[1])) {
    $getopts = getopt(null, ['session::']);
    $session_key = $getopts['session'];
}
if (empty($session_key)) {
    $session_key = 'vbot';
}
$options['console']['session_key'] = $session_key . '_' . $options['swoole']['port'];
$options['console']['image_path'] = __DIR__ . '/images/' . $session_key . '_' . $options['swoole']['port'] . ".jpg";

$vbot = new Hanson\Vbot\Foundation\Vbot($options);
$vbot->messageHandler->setHandler(function ($message) {
    Hanson\Vbot\Message\Text::send($message['from']['UserName'], 'Hi, I\'m Vbot!');
});
$vbot->server->serve();