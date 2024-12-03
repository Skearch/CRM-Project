<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\LeadModel;

class LeadController extends BaseController
{
    public function add()
    {
        return view('addLead');
    }

    public function save()
    {
        $model = new LeadModel();
        $data = [
            'leadid' => $this->request->getPost("leadid"),
            'first_name' => $this->request->getPost("firstname"),
            'last_name' => $this->request->getPost("lastname"),
            'email' => $this->request->getPost("email"),
            'phone' => $this->request->getPost("phone"),
            'lead_source' => $this->request->getPost("leadsource"),
            'lead_status' => $this->request->getPost("leadstatus"),
            'assigned_salesperson' => $this->request->getPost("assignedsalesperson")
        ];

        $model->save($data);
        return redirect()->to("/lead");
    }

    public function delete($id)
    {
        $model = new LeadModel();
        $model->delete($id);
        return redirect()->to("/lead");
    }

    public function edit($id)
    {
        $model = new LeadModel();
        $data['leads'] = $model->find($id);
        return view("editLead",$data);
    }

    public function update($id)
    {
        $model = new LeadModel();
        $data = [
            'first_name' => $this->request->getPost("firstname"),
            'last_name' => $this->request->getPost("lastname"),
            'email' => $this->request->getPost("email"),
            'phone' => $this->request->getPost("phone"),
            'lead_source' => $this->request->getPost("leadsource"),
            'lead_status' => $this->request->getPost("leadstatus"),
            'assigned_salesperson' => $this->request->getPost("assignedsalesperson")
        ];
        $model->update($id,$data);
        return redirect()->to("/lead");
    }
}