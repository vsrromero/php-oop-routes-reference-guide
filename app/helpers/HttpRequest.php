<?php

namespace app\helpers;

class HttpRequest
{
    public static function getHttpRequest(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }
}
