<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\SalespersonModel;

class SalespersonController extends BaseController
{
    public function add()
    {
        return view('addSalesperson');
    }

    public function save()
    {
        $model = new SalespersonModel();
        $data = [
            'salespersonid' => $this->request->getPost("salespersonid"),
            'first_name' => $this->request->getPost("firstname"),
            'last_name' => $this->request->getPost("lastname"),
            'email' => $this->request->getPost("email"),
            'phone' => $this->request->getPost("phone"),
            'hire_date' => $this->request->getPost("hiredate"),
            'sales_target' => $this->request->getPost("salestarget")
        ];
        $model->save($data);
        return redirect()->to("/salesperson");
    }

    public function delete($id)
    {
        $model = new SalespersonModel();
        $model->delete($id);
        return redirect()->to("/salesperson");
    }

    public function edit($id)
    {
        $model = new SalespersonModel();
        $data['salespersons'] = $model->find($id);
        return view("editsalesperson",$data);
    }

    public function update($id)
    {
        $model = new SalespersonModel();
        $data = [
            'first_name' => $this->request->getPost("firstname"),
            'last_name' => $this->request->getPost("lastname"),
            'email' => $this->request->getPost("email"),
            'phone' => $this->request->getPost("phone"),
            'hire_date' => $this->request->getPost("hiredate"),
            'sales_target' => $this->request->getPost("salestarget")
        ];
        $model->update($id,$data);
        return redirect()->to("/salesperson");
    }
}