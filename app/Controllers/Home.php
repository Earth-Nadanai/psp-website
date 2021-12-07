<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        
        echo view('template/navbar');
        echo view('index');
        
        
    }
}
