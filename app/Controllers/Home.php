<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\CustomerModel;
use App\Models\LeadModel;
use App\Models\SalespersonModel;
use App\Models\InteractionModel;
use App\Models\TransactionModel;
use App\Models\AccountModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function dashboard()
    {
        if (!$this->session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }
    
        return view('dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        $model = new AccountModel();
        
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            if ($password == $user['password']) {
                $this->session->set('isLoggedIn', true);
                $this->session->set('accountid', $user['accountid']);

                if ($this->session->get('isLoggedIn')) {
                    return redirect()->to("/dashboard");
                } else {
                    return redirect()->back()->with('error', 'Session not set.');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid credentials.');
            }
        } else {
            return redirect()->back()->with('error', 'Invalid credentials.');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

    public function viewcustomer()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();
        return view('customer', $data);
    }

    public function viewlead()
    {
        $model = new LeadModel();
        $data['leads'] = $model->findAll();
        return view('lead', $data);
    }

    public function viewsalesperson()
    {
        $model = new SalespersonModel();
        $data['salespersons'] = $model->findAll();
        return view('salesperson', $data);
    }

    public function viewinteraction()
    {
        $model = new InteractionModel();
        $data['interactions'] = $model->findAll();
        return view('interaction', $data);
    }

    public function viewtransaction()
    {
        $model = new TransactionModel();
        $data['transactions'] = $model->findAll();
        return view('transaction', $data);
    }

    public function add()
    {
        return view('add');
    }

    public function save()
    {
        $model = new CustomerModel();
        $data = [
            'customerid' => $this->request->getPost("customerid"),
            'first_name' => $this->request->getPost("firstname"),
            'last_name' => $this->request->getPost("lastname"),
            'email' => $this->request->getPost("email"),
            'phone' => $this->request->getPost("phone"),
            'address' => $this->request->getPost("address"),
            'registration_date' => $this->request->getPost("registration"),
            'assigned_salesperson' => $this->request->getPost("assigned")
        ];
        $model->save($data);
        return redirect()->to("/customer");
    }

    public function delete($id)
    {
        $model = new CustomerModel();
        if ($model->where('customerid', $id)->delete()) {
            return redirect()->to("/customer");
        } else {
            return redirect()->back()->with('errors', 'Failed to delete customer');
        }
    }

    public function edit($id)
    {
        $model = new CustomerModel();
        $data['customers'] = $model->find($id);
        return view("edit",$data);
    }

    public function update($id)
    {
        $model = new CustomerModel();
        $data = [
            'first_name' => $this->request->getPost("firstname"),
            'last_name' => $this->request->getPost("lastname"),
            'email' => $this->request->getPost("email"),
            'phone' => $this->request->getPost("phone"),
            'address' => $this->request->getPost("address"),
            'registration_date' => $this->request->getPost("registration"),
            'assigned_salesperson' => $this->request->getPost("assigned")
        ];
        $model->update($id,$data);
        return redirect()->to("/customer");
    }
}
