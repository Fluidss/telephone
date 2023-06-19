<?php

namespace App\Controllers;

use App\Core\Controller;

class Error extends Controller
{
    public function notFound()
    {
        header('HTTP/1.1 404 Not Found');
        $this->view->render('404');
    }
}
