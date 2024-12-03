<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\TransactionModel;

class TransactionController extends BaseController
{
    public function add()
    {
        return view('addTransaction');
    }

    public function save()
    {
        $model = new TransactionModel();
        $data = [
            'transactionid' => $this->request->getPost("transactionid"),
            'transaction_date' => $this->request->getPost("transactiondate"),
            'customerid' => $this->request->getPost("customerid"),
            'productid' => $this->request->getPost("productid"),
            'amount' => $this->request->getPost("amount"),
            'quantity' => $this->request->getPost("quantity"),
            'total_price' => $this->request->getPost("totalprice")
        ];
        $model->save($data);
        return redirect()->to("/interaction");
    }

    public function delete($id)
    {
        $model = new TransactionModel();
        $model->delete($id);
        return redirect()->to("/transaction");
    }

    public function edit($id)
    {
        $model = new TransactionModel();
        $data['transactions'] = $model->find($id);
        return view("edittransaction",$data);
    }

    public function update($id)
    {
        $model = new TransactionModel();
        $data = [
            'transaction_date' => $this->request->getPost("transactiondate"),
            'customerid' => $this->request->getPost("customerid"),
            'productid' => $this->request->getPost("productid"),
            'amount' => $this->request->getPost("amount"),
            'quantity' => $this->request->getPost("quantity"),
            'total_price' => $this->request->getPost("totalprice")
        ];
        $model->update($id,$data);
        return redirect()->to("/transaction");
    }
}