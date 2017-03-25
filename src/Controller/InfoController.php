<?php
namespace App\Controller;

use App\Controller\AppController;

class InfoController extends AppController
{
    public function index()
    {
        $this->set(compact('info'));
        $this->set('_serialize', ['info']);
    }
}