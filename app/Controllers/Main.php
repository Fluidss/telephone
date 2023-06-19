<?php

namespace App\Controllers;

use App\Models\CurlModel, App\Core\Controller, App\Core\Model;

class Main extends Controller
{
    protected $model;
    public function __construct()
    {
        parent::__construct();
        $this->model = new Model;
    }
    public function index()
    {
        $title = 'Узнать, кто звонил мне';
        // var_dump($this->model->getAllPosts());
        $this->view->render('main', compact('title'));
    }
    public function search()
    {
        $tel = trim($_POST['tel']) ?? '';
        $response = '';
        $error = '';
        if (!preg_match('/^[0-9]{11}$/', $tel)) {
            $error = 'Неверный формат номера';
        }
        if (empty($tel)) {
            $error = 'Заполните пожалуйста поле';
        }
        if (empty($error)) {
            $model = new CurlModel();
            $response = $model->getData($tel);
            if (is_string($response)) {
                $response = json_decode($response, true);
                $error = $response['info'];
            }
        }
        return $this->view->render('main', array('error' => $error, 'response' => $response, 'title' => 'Узнать кто звонил мне'));
    }
}
