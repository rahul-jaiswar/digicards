<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Throwable;

class Migrate extends Controller
{
    
    public function index()
    {
        $migrate = \Config\Services::migrations();

        try {

            $migrate->latest();
            echo "Table Added Successfully"; 

        } catch (Throwable $e) {
            echo "<pre>";
            print_r($e);
            exit();
        }
    }
}