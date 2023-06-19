<?php

namespace App\Core;

class View
{
    public function render(string $template, array $params = [])
    {
        extract($params, EXTR_SKIP);
        $template = ucfirst(strtolower($template));
        $filePath = dirname(__DIR__) . "/Views/$template.php";
        if (is_readable($filePath)) {
            include($filePath);
        } else {
            echo " $filePath not found";
        }
    }
}
