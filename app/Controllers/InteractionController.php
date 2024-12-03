<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\InteractionModel;

class InteractionController extends BaseController
{
    public function add()
    {
        return view('addInteraction');
    }

    public function save()
    {
        $model = new InteractionModel();
        $data = [
            'interactionid' => $this->request->getPost("interactionid"),
            'interaction_date' => $this->request->getPost("interactiondate"),
            'interaction_type' => $this->request->getPost("interactiontype"),
            'notes' => $this->request->getPost("notes"),
            'customerid' => $this->request->getPost("customerid"),
            'salespersonid' => $this->request->getPost("salespersonid")
        ];
        $model->save($data);
        return redirect()->to("/interaction");
    }

    public function delete($id)
    {
        $model = new InteractionModel();
        $model->delete($id);
        return redirect()->to("/interaction");
    }

    public function edit($id)
    {
        $model = new InteractionModel();
        $data['interactions'] = $model->find($id);
        return view('editInteraction', $data);
    }
    
    public function update($id)
    {
        $model = new InteractionModel();
        $data = [
            'interaction_date' => $this->request->getPost("interactiondate"),
            'interaction_type' => $this->request->getPost("interactiontype"),
            'notes' => $this->request->getPost("notes"),
            'customerid' => $this->request->getPost("customerid"),
            'salespersonid' => $this->request->getPost("salespersonid")
        ];
        $model->update($id,$data);
        return redirect()->to("/interaction");
    }
}