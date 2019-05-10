<?php
/**
 * 检查端口是否可以被绑定
 * @author flynetcn
 */
function checkPortBindable($host, $port, &$errno = null, &$errstr = null)
{
    $socket = stream_socket_server("tcp://$host:$port", $errno, $errstr);
    if (!$socket) {
        return false;
    }
    fclose($socket);
    unset($socket);
    return true;
}