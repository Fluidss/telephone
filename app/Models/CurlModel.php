<?php

namespace App\Models;

use  Curl\Curl;

class CurlModel extends Curl
{
    public function getData(string $tel): array|string
    {
        $this->get('http://num.voxlink.ru/get/', ['num' => $tel]);
        return (json_decode(json_encode($this->response), true));
    }
}
