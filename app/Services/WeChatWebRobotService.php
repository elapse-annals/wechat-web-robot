<?php


namespace App\Services;

use App\Presenters\WeChatWebRobotRepository;
use Hanson\Vbot\Foundation\Vbot;
use Hanson\Vbot\Message\Text;

class WeChatWebRobotService extends Service
{

    private $session_key = 'vbot';

    public function createWeChatEnd()
    {
        $options = config('options');
        while (!checkPortBindable($options['swoole']['ip'], $options['swoole']['port'])) {
            $options['swoole']['port'] += 1;
        }
        $options['console']['session_key'] = $this->session_key . '_' . $options['swoole']['port'];
        $options['console']['image_path'] = __DIR__ . ' / images / ' . $this->session_key . '_' . $options['swoole']['port'] . ".jpg";
        cache('session_key_' . session(), $options);
        $vbot = new Vbot($options);
        $vbot->messageHandler->setHandler(function ($message) {
            Text::send($message['from']['UserName'], 'Hi, I\'m Vbot!');
        });
        $vbot->server->serve();
    }
}