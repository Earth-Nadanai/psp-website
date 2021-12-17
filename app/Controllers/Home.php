<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        echo view('template/navbar');
        echo view('index');
        echo view('template/footer');
    }

    public function serviceall() 
    {
        echo view('template/navbar');
        echo view('PAS-ServiceAll');
        echo view('template/footer');
    }
    
    public function worksperformance()
    {
        echo view('template/navbar');
        echo view('WorksPerformance');
        echo view('template/footer');
    }

    public function productall()
    {
        echo view('template/navbar');
        echo view('PAS-ProductAll');
        echo view('template/footer');
    }

    public function login()
    {
        echo view('login');
    }

    public function detailservice()
    {
        echo view('template/navbar');
        echo view('PAS-DetailService');
        echo view('template/footer');
    }
    
}
