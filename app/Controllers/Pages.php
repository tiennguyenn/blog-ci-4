<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Pages';
        return view('templates/header', $data)
            . view('pages/index')
            . view('templates/footer');
    }
}
