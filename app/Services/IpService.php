<?php


namespace App\Services;


class IpService extends Service
{
    public function checkPortBindable($host, $port, &$errno = null, &$errstr = null)
    {
        $socket = stream_socket_server("tcp://$host:$port", $errno, $errstr);
        if (!$socket) {
            return false;
        }
        fclose($socket);
        unset($socket);
        return true;
    }
}