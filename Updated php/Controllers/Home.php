<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\CustomerModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function viewcustomer()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();
        return view('customer', $data);
    }
}
